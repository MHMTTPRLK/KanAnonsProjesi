<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\AcilKan;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AnonsController extends Controller
{
    public function index()
   {
       $cities=City::all();
           return view('fronted.anonsyap',compact('cities'));
   }
   public function  anonsShow()
   {
       $citys=City::all();
       $datas=AcilKan::orderBy('updated_at','DESC')->get();
        return view('fronted.anonsList',compact('datas','citys'));
   }
    public function  anonsDetay($id)
    {

        $data=AcilKan::findOrFail($id);

        return view('fronted.anonsDetay',compact('data'));
    }
    public function  create(Request $request)
    {

        $user_id=$request->user_id;
        $name=$request->anons_name;
        $surname=$request->anons_surname;
        $phone=$request->anons_phone;
        $kan=$request->anons_kan;
        $sehir=$request->city_id;
        $ilce=$request->district_id;
        $detay=$request->anons_detay;
      AcilKan::create([
            'user_id'=>$user_id,
            'anons_name' =>$name,
            'anons_surname' =>$surname,
            'anons_phone' => $phone,
            'anons_kan' =>$kan,
            'anons_detay' => $detay,
            'sehir' =>$sehir ,
            'ilce' => $ilce,
        ]);

        return back();
    }
    public function show($id)
    {

        $anonslarim=AcilKan::all();
        $anons=AcilKan::where('user_id',$id)->get();
        return view('fronted.anonslarim',compact('anons'));
    }
    public function  anons_Update(Request $request)
    {
        $id=$request->id;

        $anons=AcilKan::find($id);
        $anons->anons_name=$request->anons_name;
        $anons->anons_surname=$request->anons_surname;
        $anons->anons_phone=$request->anons_phone;
        $anons->anons_kan=$request->anons_kan;
        $anons->sehir=$request->sehir;
        $anons->ilce=$request->ilce;
        $anons->anons_detay=$request->anons_detay;
        $anons->save();
        return redirect()->back();
    }
    public function anons_Delete(Request $request)
    {

        $user=AcilKan::findOrFail($request->id)->delete();
        return redirect()->back();
    }
    public function anonsGetData(Request $request)
    {
        $anons=AcilKan::findOrFail($request->id);

        return response()->json($anons);
    }

   public function  modalKontrol(Request $request)
   {
    $email=$request->email;
    $pass=$request->password;

       if (Auth::attempt(['email' => $email, 'password' => $pass])) {

           return  view('fronted.anonsyap');
       }
       else
       {
           return redirect()->route('anons-duyuru')
               ->with('message', 'Kullanıcı Bilgileri Bulunamadı.');

       }
   }
}
