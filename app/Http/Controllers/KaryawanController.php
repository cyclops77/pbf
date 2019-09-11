<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Employee;

class KaryawanController extends Controller
{
	public function index(Request $request)
	    {
	    	if ($request->ajax()) {
    		$data = Employee::latest()->get();
    		return DataTables::of($data)
    		->addIndexColumn()
    		->addColumn('action', function($row)
    		{
    			$btnDelete = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Delete" class="edit btn btn-warning btn-sm deleteGuru">Delete</a>';
                return $btnDelete; 
    		})
    		->rawColumns(['action'])
    		->make(true);
    	}
    	return view('employee.index',compact('employee'));
	    }    
	 public function store(Request $request)
	    {
	    	
	    }
}
