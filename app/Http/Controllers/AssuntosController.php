<?php

namespace App\Http\Controllers;

use App\Assuntos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AssuntosController extends Controller
{
    private $assuntos;

    public function __construct()
    {
        $this->assuntos = new Assuntos();
    }

    public function view()
    {
        return view('assuntos.view',['allAssuntos' => $this->assuntos->getAllAssuntos()]);
    }

    public function add(Request $request)
    {
        $dataAgora = date("Y-m-d H:i:s");

        if ($request->tipoassunto == "pai"):
            $assunto = $this->assuntos->setAssunto(['ds_assunto' => $request->ds_assunto, 'created_at' => $dataAgora, 'updated_at'=> $dataAgora]);
            $txtSucess = "Assunto cadastrado com sucesso!";
        else:
            $assunto = $this->assuntos->setAssunto(['ds_assunto' => $request->ds_assunto,'id_parent'=> $request->id_assunto, 'created_at' => $dataAgora, 'updated_at'=> $dataAgora]);
            $txtSucess = "Assunto cadastrado e associado com sucesso!";
        endif;
        \Session::flash('success', $txtSucess);
        if($assunto){
            return Redirect::to('assuntos/view');
        }
    }

    public function addVinculo(Request $request)
    {
        $cliente = $this->assuntos->setLinkAssuntoParent([
            'id_assunto' => $request->id_assunto, 'id_subassunto' => $request->id_subassunto
        ]);
        \Session::flash('success',"Assunto vinculado com sucesso!");
        if($cliente){
            return Redirect::to('assuntos/view');
        }
    }
}
