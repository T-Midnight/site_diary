<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    //
	public $timestamps = false;
	protected $table = 'user';
	
	protected $fillable = ['surname', 'name', 'sex', 'phone', 'yearbirth']; //поля, которые заполняются
    protected $primarykey = 'id';
}
