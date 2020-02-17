<?php

namespace App\Http\Controllers;

use App\Orgaos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrgaosController extends Controller
{
    private $orgaos;

    public function __construct()
    {
        $this->orgaos = new Orgaos();
    }

    public function view()
    {
        $allOrgaos = $this->orgaos->get();
        return view('orgaos.view',['allOrgaos'=>$allOrgaos]);
    }

    public function add(Request $request)
    {

        $cliente = $this->orgaos->create([ 'no_orgao' => $request->no_orgao,]);
        \Session::flash('success',"Órgão cadastrado com sucesso!");
        if($cliente){
            return Redirect::to('orgaos/view');
        }
    }
}
