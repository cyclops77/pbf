<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use App\User;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AktivasiController extends Controller
{
    public function index()
    {
    	return view('activate.form-activation');
    }
    public function postActivate(Request $request)
    {
    	$email = $request->email;
    	if (User::where('email','=',$email)->exists()) {
    	
			$passwordRaw = Str::random(10);

    		$subject = 'Aktivasi Akun WEB PBF';
   			$message = $passwordRaw;

   			\App\User::where('email','=',$email)
       			->update(['password' => bcrypt($passwordRaw)]);

   		// $user->password = bcrypt($pendaftar->password_req);
        // $user->remember_token = str_random(60);

    		Mail::to($email)->send( new SendEmail($subject, $message));

    	// Session::flash("success");
    		return back()->with('sukses','Password Aktivasi ada di email anda');
    	}return back()->with('gagal','Email Anda Tidak Terdaftar, silahkan registrasi karyawan');

    }
}
