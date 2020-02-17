<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Assuntos extends Model
{
    protected $table = "tb_assuntos";
    protected $fillable = [
        'ds_assunto',
        'id_pai',
    ];


    public function getAssuntos(){
        $assuntoPai = DB::table('tb_assuntos')->select('*')->whereNull('id_parent')->get();
        $assuntoFilho = DB::table('tb_assuntos')->select('*')->whereNotNull('id_parent')->get();

        foreach ($assuntoPai as $pai):
            foreach ($assuntoFilho as $filho):
                if ($filho->id_parent == $pai->id_assunto): $pai->filho[] = $filho;endif;
            endforeach;
        endforeach;

        return $assuntoPai;
    }

    public function getSubAssuntosByParent($idAssunto){
        $select = DB::table('tb_subassuntos')->select('*')
            ->where('id_assunto','=',$idAssunto)
            ->get();
        return $select;
    }

    public function setAssunto(Array $data){
        $updateOrInsert = DB::table('tb_assuntos')
            ->updateOrInsert($data);
        return $updateOrInsert;
    }

    public function setSubAssunto(Array $data){
        $updateOrInsert = DB::table('tb_subassuntos')
            ->updateOrInsert($data);
        return $updateOrInsert;
    }

    public function setLinkAssuntoParent(Array $data){
        $updateOrInsert =  DB::table('rl_assuntos_subassuntos')
            ->updateOrInsert($data);
        return $updateOrInsert;
    }
}
