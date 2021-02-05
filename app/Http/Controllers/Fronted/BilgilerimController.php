<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\District;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class BilgilerimController extends Controller
{
   public  function  index()
   {
       $id=Auth::user()->id;
       $data=User::find($id);
       $cities=City::all();
       return view('fronted.bilgilerim',compact('data','cities'));
   }
    public  function  update(Request $request,$id)
    {


        $user=User::find($id);
        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->kanGrubu=$request->kanGrubu;
        $user->sehir=$request->city_id;
        $user->ilce=$request->district_id;
        $user->save();

        return redirect()->back();
    }
    public function getDistrict(Request $request)
    {
        $data['districts'] = District::where("city_id",$request->city_id)
            ->get(["name","id"]);
        return response()->json($data);
    }
}
