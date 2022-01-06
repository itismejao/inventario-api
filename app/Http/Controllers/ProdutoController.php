<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    
    public function getAll() {
        return DB::select('select * from vw_produto_ids');
    }

}
