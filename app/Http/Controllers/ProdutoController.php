<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    
    public function getQtd() {
        $result = DB::select('select count(*) as total_produtos from produto');

        return response()->json($result, 200);
    }

    public function getProductPagination($init, $end) {
        $result = DB::select("select tabela2.id_produto, tabela2.cod_barra as ean, tabela2.resumida as nome
                              from (select tabela.*, rownum r
                                    from (select m.* from produto m order by m.id_produto desc) tabela
                                    order by tabela.id_produto desc) tabela2
                              where tabela2.r >= {$init} and tabela2.r <= {$end}
                              order by tabela2.id_produto desc");
    
        return response()->json($result, 200);
    }


}



