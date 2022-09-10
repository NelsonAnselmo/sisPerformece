<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cao_fatura extends Model
{
    //
    protected $table='cao_fatura';

	protected $primaryKey ='co_fatura';
	public $timestamps    =false;

	protected $fillable = ['co_sistema', 'co_cliente', 'co_os', 'data_emissao', 'valor','total_imp_inc','comissao_cn'];

	protected $guarded  =[];
}
