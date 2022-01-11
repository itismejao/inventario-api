<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    
    public function getAllProducts() {
        $result = DB::select('select * from vw_produto_ids where rownum < 10000 order by id_produto asc');

        return response()->json($result, 200);
    }

    public function getProductPagination($init, $end) {
        $result = DB::select("select tabela.id_produto, tabela.ean, tabela.nome 
        from (select m.*, rownum r from vw_produto_ids m) tabela
        where tabela.r >= {$init} and tabela.r <= {$end} 
        order by tabela.id_produto desc");
    
        return response()->json($result, 200);
    }
    
}



