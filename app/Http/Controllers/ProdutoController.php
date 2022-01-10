<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    
    public function getAll() {
        $result = DB::select('select * from vw_produto_ids where rownum < 1000 order by id_produto asc');

        return response()->json($result, 200);
    }
    
    
    public function getComEan() {
        $result = DB::select('select * from vw_produto_ids where ean is not null');
        
        return response()->json($result, 200);
    }

    public function getSemEan() {
        return DB::select('select * from vw_produto_ids where ean is null');
    }

}

