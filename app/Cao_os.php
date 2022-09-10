<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cao_os extends Model
{
    //
    protected $table='cao_os';

	protected $primaryKey ='co_os';
	public $timestamps    =false;

	protected $fillable = ['co_os ', '	co_usuario'];

	protected $guarded    =[];
}
