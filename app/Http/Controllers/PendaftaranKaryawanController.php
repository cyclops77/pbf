<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranKaryawanController extends Controller
{
    public function index()
    {
    	return view('public.register.index');
    }
    public function create(Request $request)
    {
    	$regist = new \App\Registrant;
    	$regist->email = $request->email;
    	$regist->first_name = $request->first_name;
    	$regist->last_name = $request->last_name;
    	$regist->address = $request->address;
    	$regist->job_experience = $request->job_experience;
    	$regist->last_education = $request->last_education;
    	$regist->status = 'belum di terima';

    	$regist->save();

    	return redirect()->back()->with('sukses','anda telah mengirim registrasi karyawan');
    }
    public function registrantList()
    {
    	$register = \App\Registrant::where('status','=','belum di terima')->get();
    	return view('manager.list-registrants',['register' => $register]);
    }
    public function accregistrant(Request $request)
    {
    	foreach ($request->person as $p) {
    		$pendaftar = \App\Registrant::where('id','=',$p)->first();

    		$user = new \App\User;

    		$user->role = 'karyawan';
    		$user->id = mt_rand(10000,99999);
    		$empl = \App\Employee::create([
    			'user_id' => $user->id,
    			'first_name' => $pendaftar->first_name,
    			'last_name' => $pendaftar->last_name,
    			'address' => $pendaftar->address,
    			'job_experience' => $pendaftar->job_experience,
    			'last_education' => $pendaftar->last_education
    		]);
    		$user->name = $pendaftar->first_name;
    		$user->email = $pendaftar->email;
    		
       		$user->save();

       		\App\Registrant::where('id','=',$p)
       			->update(['status' => 'diterima']);
    	}
    	return redirect()->back()->with('sukses','Berhasil Menerima Karyawan');
    }
}
