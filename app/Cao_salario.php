<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cao_salario extends Model
{
    //
    protected $table='cao_salario';

	protected $primaryKey ='co_usuario';
	public $timestamps    =false;

	protected $fillable = ['co_usuario ', 'brut_salario'];

	protected $guarded    =[];
}
