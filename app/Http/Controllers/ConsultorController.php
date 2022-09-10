<?php

namespace App\Http\Controllers;

use App\Cao_usuario;
use App\Permissao_sistema;
use App\Cao_fatura;
use App\Cao_salario;
use App\Cao_os;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB; 
class ConsultorController extends Controller
{
    //
    public function show()
	{
        $visao = 'A';
        $cao_usuarios =DB::table('cao_usuario as c')
		->join('permissao_sistema as p','c.co_usuario','=','p.co_usuario')
        ->select('p.co_usuario', 'c.no_usuario', 'p.co_sistema', 'p.in_ativo' ,'p.co_tipo_usuario')
		->where('p.co_sistema','=',1)
        ->where('p.in_ativo','=','S')
        ->whereIn('p.co_tipo_usuario', [0, 1, 2])
		->paginate(5);
    

       return view("consultor.lista",["cao_usuarios"=>$cao_usuarios, 'visao'=>$visao]);

    }

    public function relatorio(){

        $visao = 'V';
        $cao_usuarios =DB::table('cao_usuario as c')
		->join('permissao_sistema as p','c.co_usuario','=','p.co_usuario')
        ->select('p.co_usuario', 'c.no_usuario', 'p.co_sistema', 'p.in_ativo' ,'p.co_tipo_usuario')
		->where('p.co_sistema','=',1)
        ->where('p.in_ativo','=','S')
        ->whereIn('p.co_tipo_usuario', [0, 1, 2])
		->paginate(5);

        $relatorio =DB::table('cao_fatura as  f')
        ->join('cao_os as o','f.co_os','=','f.co_os')
        ->join('cao_usuario as u','o.co_usuario','=','u.co_usuario')
        ->join('cao_salario as s','u.co_usuario','=','s.co_usuario')
        ->select('o.co_usuario', 'u.no_usuario', 's.brut_salario', DB::raw('sum(comissao_cn) as totalcomissao'), DB::raw('sum(valor) as totalvalor'), DB::raw('sum(total_imp_inc) as totalinpost'))
        ->orderBy('u.no_usuario','ASC')
        ->groupBy('o.co_usuario','u.no_usuario','brut_salario')
        ->get();


        return view("consultor.lista",["cao_usuarios"=>$cao_usuarios, 'relatorio'=>$relatorio, 'visao'=>$visao]);

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
