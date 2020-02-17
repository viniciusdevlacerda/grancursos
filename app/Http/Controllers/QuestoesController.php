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
            $filterResult = $this->questoes->getFilterQuestoes($param);
            foreach ($filterResult as $key => $filter):
                $filter = get_object_vars($filter);
                $arrFilter[$filter['id_assunto']][] = $filter;
            endforeach;
            $result = ($filterResult) ? true : false;
            $arrView['result'] = $result;
            $arrView['filterResult'] = $arrFilter;
        }
        $arrView = [
            'allBancas'=> $this->bancas->get(),
            'allOrgaos'=> $this->orgaos->get()
        ];
        return view('questoes.view',$arrView);
    }
    public function list()
    {
        return view('questoes.list',
            [
                'allQuestoes'=> $this->questoes->get(),
                'allAssuntos'=> $this->assuntos->getAssuntos(),
                'allBancas'=> $this->bancas->get(),
                'allOrgaos'=> $this->orgaos->get()
            ]);
    }

    public function add(Request $request)
    {
        $cliente = $this->questoes->create([ 'tx_questao' => $request->tx_questao,]);
        \Session::flash('success',"Questão cadastrada com sucesso!");
        if($cliente){
            return Redirect::to('questoes/list');
        }
    }

    public function addVinculo(Request $request)
    {
        $cliente = $this->questoes->setLinkQuestaoAssuntoBancaOrgao([
            'id_questao' => $request->id_questao, 'id_assunto' => $request->id_assunto, 'id_banca' => $request->id_banca, 'id_orgao' =>$request->id_orgao
        ]);
        \Session::flash('success',"Questão vinculada com sucesso!");
        if($cliente){
            return Redirect::to('questoes/list');
        }
    }

}
