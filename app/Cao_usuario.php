<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cao_usuario extends Model
{
    //
    protected $table='cao_usuario';

	protected $primaryKey ='co_usuario';
	public $timestamps    =false;

	protected $fillable = ['co_usuario', 'no_usuario', 'nu_cpf', 'nu_rg', '	nu_telefone'];

	protected $guarded    =[];
}
