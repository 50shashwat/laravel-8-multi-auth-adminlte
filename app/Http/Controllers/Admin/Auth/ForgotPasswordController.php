<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Mail;
class ForgotPasswordController extends Controller
{

    protected function guard(){
        return Auth::guard('admin');
    }
    public function getEmail()
    {

       
       return view('admin.auth.passwords.admin-email');
    }

    public function postEmail(Request $request)
    {
      
        $request->validate([
            'email' => 'required|email|exists:admins',
        ]);
       

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        // Mail::send('admin.auth.passwords.admin-verify',['token' => $token], function($message) use ($request) {
        //           $message->from($request->email);
        //           $message->to('admin@example.com');
        //           $message->subject('Reset Password Notification');
        //        });

        return view('admin.auth.passwords.admin-reset');

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

}
