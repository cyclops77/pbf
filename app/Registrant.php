<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    protected $table = 'registrant';
    protected $fillable = ['email','first_name','last_name','address','job_experience','last_education','status'];
}
