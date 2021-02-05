<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function  index()
    {
        $contacts=Contacts::orderBy('status','asc')->orderBy('updated_at','DESC')->get();
        return view('back.contacts.message-list',compact('contacts'));
    }
    public function messageGetData(Request $request)
    {
        $contact=Contacts::findOrFail($request->id);

        return response()->json($contact);
    }
    public function deleteMsg(Request $request)
    {
        $contact=Contacts::findOrFail($request->id)->delete();
        toastr()->success('Mesaj Başarılı Şekilde Silinen Mesajlara Taşındı');
        return redirect()->back();
    }
    public function  recoverMsg($id)
    {
        $contacts=Contacts::onlyTrashed()->find($id)->restore();
        $sayi=0;
        $contact=Contacts::find($id);
        $contact->status=$sayi;
        $contact->save();
        toastr()->success('Mesaj Başarılı Şekilde Geri Alındı.');
        return redirect()->back();

    }

    public function messageTrashed()
    {
        $contacts=Contacts::onlyTrashed()->orderBy('deleted_at','desc')->get();
         return view('back.contacts.message-trashed',compact('contacts'));
    }

    public function  hardDeleteMsg($id)
    {

         $contacts=Contacts::onlyTrashed()->find($id);
               $contacts->forceDelete();
               toastr()->success('Mesaj Başarılı Şekilde Silindi');
               return redirect()->route('admin.contact');

    }
    public function  messageStatus(Request $request)
    {
        $sayi=1;
       $contact=Contacts::find($request->id);
       $contact->status=$sayi;
       $contact->save();
       return redirect()->back();

    }

}
