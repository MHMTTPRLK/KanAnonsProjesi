<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\AcilKan;
use App\Models\City;
use App\Models\Comment;
use App\Models\District;
use App\Models\Gonullu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
   public function  index()
   {
       $comments=Comment::where('status',1)
           ->orderBy('updated_at','DESC')
           ->limit(4)->get();
       $datas=AcilKan::orderBy('updated_at','DESC')->limit(4)->get();
       if(Auth::user())
       {
           $id=Auth::user()->id;
           $gonullu=Gonullu::where('gonullu_id',$id)->first();
          if($gonullu)
          {

             $sayi=1;
            //dd($sayi);die();
              return view('fronted.index',compact('comments','datas','sayi'));
          }
          else
          {
              $sayi=0;
              // dd($sayi);die();
              return view('fronted.index',compact('comments','datas','sayi'));
          }

       }
        else{
            $sayi=0;
            return view('fronted.index',compact('comments','datas','sayi'));
        }




   }
    public function  hakkimizda()
    {
        return view('fronted.hakkimda');
    }
    public function giris()
    {
        return view('fronted.login1');
    }
    public function kayit()
    {
        $cities=City::all();
        return view('fronted.registerPage',compact('cities'));
    }
    public function  ornekShow()
    {
        $cities=City::all();
        return view('fronted.ornek',compact('cities'));
    }
    public function getDistrict(Request $request)
    {
        $data['districts'] = District::where("city_id",$request->city_id)
            ->get(["name","id"]);
        return response()->json($data);
    }
    public function  yorumYap( Request $request)
    {
        $comment=new Comment();
        $comment->fullname=$request->fullname;
        $comment->email=$request->email;
        $comment->comment=$request->comment;
        $comment->ip_address=$ip=request()->ip();
        $comment->device=0;
        $comment->save();
        return redirect()->back();

    }
    public function  gonulluOl()
    {
        return view('fronted.gonullu-ol');
    }

}
