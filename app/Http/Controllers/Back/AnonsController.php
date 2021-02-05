<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\AcilKan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnonsController extends Controller
{
    public  function  index()
    {
        $anons_data=AcilKan::all();

        return view('back.anons.anons-list',compact('anons_data'));
    }
    public  function anonsShow(Request $request,$id)
    {

        $anons_details=AcilKan::findOrFail($id);

        return view('back.anons.anons-details',compact('anons_details'));
    }
    //soft delete ile silindi

    public function anonsDelete(Request $request)
    {
        $user=AcilKan::findOrFail($request->id)->delete();

        toastr()->success('Anons Başarılı Şekilde Silinen Anonslara Taşındı');
        return redirect()->back();

    }
    public function anonsGetData(Request $request)
    {
        $anons=AcilKan::findOrFail($request->id);

        return response()->json($anons);
    }
}
