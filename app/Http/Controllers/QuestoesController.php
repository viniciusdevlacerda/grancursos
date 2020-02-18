<?php

namespace App\Http\Controllers;

use App\Assuntos;
use App\Bancas;
use App\Orgaos;
use App\Questoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuestoesController extends Controller
{
    private $questoes;
    private $assuntos;
    private $bancas;
    private $orgaos;

    public function __construct()
    {
        $this->questoes = new Questoes();
        $this->assuntos = new Assuntos();
        $this->bancas = new Bancas();
        $this->orgaos = new Orgaos();
    }

    public function view(Request $request)
    {
        $arrFilter = [];
        $param = $request->query();
        if (!empty($param) && $request->isMethod('get')) {
            foreach ($this->questoes->getFilterQuestoes($param) as $filter):
                $arrFilter[$filter->ds_assunto][] = $filter;
            endforeach;
        }
        $arrView = [
            'allBancas'=> $this->bancas->get(),
            'allOrgaos'=> $this->orgaos->get(),
            'filterResult'=> $arrFilter
        ];
        return view('questoes.view',$arrView);
    }
    public function list()
    {
        return view('questoes.list',
            [
                'allQuestoes'=> $this->questoes->getAllQuestoes(),
                'allAssuntos'=> $this->assuntos->getAllAssuntos(),
                'allBancas'=> $this->bancas->get(),
                'allOrgaos'=> $this->orgaos->get()
            ]);
    }

    public function add(Request $request)
    {
        $cliente = $this->questoes->setQuestoes([
            'tx_questao' => $request->tx_questao,
            'id_assunto' => $request->id_assunto,
            'ds_assunto' => $request->ds_assunto,
            'id_banca' => $request->id_banca,
            'id_orgao' => $request->id_orgao,
        ]);
        \Session::flash('success',"Questão cadastrada com sucesso!");
        if($cliente){
            return Redirect::to('questoes/list');
        }
    }

 }
