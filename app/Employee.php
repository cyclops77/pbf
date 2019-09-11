<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $table = 'employee';
    protected $fillable = ['user_id','first_name','last_name','address','job_experience','last_education'];
}
