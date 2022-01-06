<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    
    public function getComEan() {
        return DB::select('select * from vw_produto_ids where ean is not null');
    }

    public function getSemEan() {
        return DB::select('select * from vw_produto_ids where ean is null');
    }

}
