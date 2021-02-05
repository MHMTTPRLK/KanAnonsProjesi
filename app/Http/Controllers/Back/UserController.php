<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function  index()
    {
        $users=User::orderBy('created_at','ASC')->get();

        return view('back.users.user-list',compact('users'));
    }
    public  function userShow(Request $request,$id)
    {

        $user_details=User::findOrFail($id);

        return view('back.users.user-details',compact('user_details'));
    }
    //soft delete ile silindi

    public function userDelete(Request $request)
    {
        $user=User::findOrFail($request->id)->delete();

        toastr()->success('Kullanıcı Başarılı Şekilde Silinen Kullanıcılara Taşındı');
        return redirect()->back();

    }
    public function userGetData(Request $request)
    {
        $user=User::findOrFail($request->id);

        return response()->json($user);
    }
    public function  userEdit($id)
    {
        $user=User::findOrFail($id);

        return view('back.users.user-edit',compact('user'));
    }
    public function  userUpdate(Request $request, $id)
    {

        $user=User::findOrFail($id);

        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->phone=$request->phone;
        $user->sehir=$request->sehir;
        $user->ilce=$request->ilce;
        if($request->email!="")
        {
            $user->email=$request->email;
        }
        $user->save();
        toastr()->success('Başarılı', 'Kullanıcı Başarıyla Güncellendi');
        return redirect()->route('admin.user-list');




    }
}
