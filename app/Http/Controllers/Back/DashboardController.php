<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\AcilKan;
use App\Models\Contacts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        //$this->middleware('isAdmin');
    }
    public  function  index()
    {
        $anons=AcilKan::orderBy('updated_at', 'DESC')->limit(2)->get();
        return view('back.dashboard',compact('anons'));
    }


}
