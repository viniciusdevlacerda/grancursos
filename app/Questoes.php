<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Questoes extends Model
{
    protected $table = "tb_questoes";
    protected $fillable = [
        'tx_questao',
    ];


    public function getFilterQuestoes(Array $param){
        if ($param){
            $filter = DB::table('rl_questao_assunto_orgao_banca')
                ->select()
                ->join('tb_assuntos','tb_assuntos.id_assunto','=','rl_questao_assunto_orgao_banca.id_assunto')
                ->where('id_banca','=',$param['banca'])
                ->where('id_orgao','=',$param['orgao'])
                ->get();
            return $filter;
        }

    }

    public function setLinkQuestaoAssuntoBancaOrgao(Array $data){
        $updateOrInsert = DB::table('rl_questao_assunto_orgao_banca')
            ->updateOrInsert($data);
        return $updateOrInsert;
    }

}
