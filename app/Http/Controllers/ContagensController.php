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

    public function getContagensPendentes($filial) {
        $result = DB::select("select c.id_filial, c.data_cria, i.id_inventario_cic, c.observacao, i.id_produto, i.ordem_contagem
                              from inventario_cic_contagem i inner join inventario_cic c on i.id_inventario_cic = c.id_inventario_cic 
                              where c.id_filial = {$filial} and i.ordem_contagem > 1 and i.situacao in (1,2) and c.situacao in (1,2)
                              order by i.id_inventario_cic desc");
    
        return response()->json($result, 200);
    }

    
}

