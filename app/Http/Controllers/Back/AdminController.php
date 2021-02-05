<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function  index()
    {
        return view('back.adminInfo.admin-details');
    }
    public function  adminUpdate(Request $request,$id)
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
