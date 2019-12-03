<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'studens';
	protected $fillable = ['nama','nrp','email','jurusan'];
}
