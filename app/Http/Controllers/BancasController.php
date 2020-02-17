<?php

namespace App\Http\Controllers;

use App\Bancas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BancasController extends Controller
{
    private $bancas;

    public function __construct()
    {
        $this->bancas = new Bancas();
    }

    public function view()
    {
        $allBancas = $this->bancas->get();
        return view('bancas.view', ['allBancas' => $allBancas]);
    }

    public function add(Request $request)
    {
        $cliente = $this->bancas->create(['no_banca' => $request->no_banca]);
        \Session::flash('success',"Bancas cadastrada com sucesso!");
        if($cliente){
            return Redirect::to('bancas/view');
        }
    }
}
