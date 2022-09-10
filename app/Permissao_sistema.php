<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao_sistema extends Model
{
    //
    protected $table='permissao_sistema';

	protected $primaryKey ='co_usuario';
	public $timestamps    =false;

	protected $fillable = ['co_usuario', 'co_tipo_usuario', 'co_sistema', 'in_ativo', '	nu_telefone'];

	protected $guarded    =[];
}
