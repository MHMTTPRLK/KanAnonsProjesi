<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\AcilKan;
use App\Models\Gonullu;

use Illuminate\Http\Request;

class GonulluController extends Controller
{
    public  function  index()
    {


       $gonullu_data=Gonullu::orderBy('created_at','ASC')->get();

        return view('back.gonullu.gonullu-list',compact('gonullu_data'));
    }
    //soft delete ile silindi

    public function gonulluDelete(Request $request)
    {
        $user=Gonullu::findOrFail($request->id)->delete();

        toastr()->success('Gönüllü Başarılı Şekilde Silinen Gönüllülere Taşındı');
        return redirect()->back();

    }
    public function userGetData(Request $request)
    {
        $user=Gonullu::findOrFail($request->id);

        return response()->json($user);
    }
}
