<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContagensController extends Controller
{

    public function salvarContagem(Request $request) {

        try {
            $id_filial = $request->input('id_filial');
            $id_funcionario = $request->input('id_funcionario');
            $id_agrupador = $request->input('id_agrupador');
            $id_item_inventario = $request->input('id_item_inventario');
    
            $data = $request->input('produtos');
    
            foreach($data as $key){
                DB::insert('insert into inventario_cic_imp_afrot 
                    (id_filial, id_funcionario, id_agrupador, data_cria_agrupador, data_inicia_agrupador, data_termino_agrupador, id_item_inventario, id_produto, ean, id_unico, quantidade, status, aplicacao) 
                    values (?,?,?,sysdate,sysdate,sysdate,?,?,?,?,?,?,?)', 
                            [$id_filial,$id_funcionario,$id_agrupador,null,$key['id_produto'],$key['ean'],null,$key['quantidade'],1,2]);
            }
    
            return response()->json('Sucesso!', 200);
            
        } catch (\Throwable $th) {
            return response()->json($th, 404);
        }
    
    }
    
}

