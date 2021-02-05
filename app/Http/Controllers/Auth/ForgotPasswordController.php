<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{


    use SendsPasswordResetEmails;

    public function getEmail()
    {

        return view('auth.passwords.email');
    }



      public function postEmail(Request $request)
       {
           $request->validate([
               'email' => 'required|email|exists:users',
           ]);

           $token = Str::random(60);

           DB::table('password_resets')->insert(
               ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
           );

           Mail::send('auth.verify',['token' => $token], function($message) use ($request) {
               $message->from('kananonsum@gmail.com','KanAnonsum');
               $message->to($request->email);
               $message->subject('Şifre Değiştirme Bilgilendirmesi');
           });

           return back()->with('message', 'We have e-mailed your password reset link!');
       }
}
