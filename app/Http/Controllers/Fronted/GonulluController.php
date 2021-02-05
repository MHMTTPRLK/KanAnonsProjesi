<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\Gonullu;
use App\Models\User;
use Illuminate\Http\Request;

class GonulluController extends Controller
{
  public function  index()
  {
      $datas=Gonullu::all();
      return view('fronted.gonullu',compact('datas'));
  }
  public function showList()
  {
      $datas=Gonullu::all();
      return view('fronted.gonullu',compact('datas'));
  }
    public function gonulluGetData(Request $request)
    {
        $gonullu=User::findOrFail($request->id);
        $sehir=$gonullu->get_City->name;
        $ilce=$gonullu->get_District->name;
        return response()->json(array('gonullu'=>$gonullu,'sehir'=>$sehir,'ilce'=>$ilce));
    }
    public function  gonuluShow($id)
    {
       /* die();
        $data=User::findOrFail($id);
        //dd($data->get_City->name);

        return view('fronted.gonulluKisi',compact('data'));*/
    }


    public function gonulluCreate(Request $request)
    {
        $validatedData = $request->validate([
            'dogrula1'=>['required'],

        ]);
        $id=$request->id;
        if($validatedData)
        {
           Gonullu::create([
               'gonullu_id'=>$id,
               ]);
            return redirect()->route('gonullu');
        }
    }


}
