<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cao_cliente extends Model
{
    //
    protected $table='cao_cliente';

	protected $primaryKey ='co_cliente';
	public $timestamps    =false;

	protected $fillable =['co_cliente','tp_cliente','no_razao'];
	protected $guarded  =[];
}
