<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cao_cliente;

class ClienteController extends Controller
{
    //
    public function show()
	{
        $cao_clientes =DB::table('cao_cliente')
        ->where('tp_cliente','=','A')
        ->paginate(5);

        return view('cliente.lista',["cao_clientes"=>$cao_clientes]);

    }

    public function create()
    {

    }

    public function store()
    {
        
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}
