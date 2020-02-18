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


    public function getAllQuestoes(){
        $filter = DB::table('tb_questoes')
            ->select()
            ->join('tb_orgao','tb_orgao.id_orgao','=','tb_questoes.id_orgao')
            ->join('tb_banca','tb_banca.id_banca','=','tb_questoes.id_banca')
            ->get();
        return $filter;
    }

    public function getFilterQuestoes(Array $param){
        if ($param){
            $filter = DB::table('tb_questoes')
                ->select()
                ->where('id_banca','=',$param['banca'])
                ->where('id_orgao','=',$param['orgao'])
                ->get();
            return $filter;
        }

    }

    public function setQuestoes($data){
        $result = DB::table('tb_questoes')
            ->updateOrInsert($data);
        return $result;
    }
}
