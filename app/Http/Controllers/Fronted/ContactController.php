<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function  index()
   {
       return view('fronted.contact');
   }
   public function  mesajAt(Request $request)
   {
        $contact=new Contacts();
        $contact->fullname=$request->fullname;
        $contact->email=$request->email;
        $contact->topic=$request->topic;
        $contact->message=$request->message;
        $contact->status=0;
        $contact->save();
        return redirect()->back();
   }
}
