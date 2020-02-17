@extends('layout.layout')
@section('content')
    <section id="orgaos">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(!empty($allQuestoes))
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h1>Questões</h1>
                                <a class="btn btn-custom-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Adicionar Novo</a>
                            </div>
                            <div class="card-body">
                                <div class="collapse float-right my-3" id="collapseExample">
                                    <form class="form-inline" method="POST" action="/questoes/add">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control" value="" name="tx_questao" type="text" autofocus placeholder="Descrição da questão">
                                            <button type="submit" class="btn btn-custom-secondary mx-2">Adicionar</button>
                                        </div>
                                    </form>
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Questão</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allQuestoes as $questao)
                                        <tr>
                                            <td>
                                                {{$questao->id_questao}}
                                            </td>
                                            <td>
                                                {{$questao->tx_questao}}
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#formVinculo">Vincular questão</a>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div class="modal" tabindex="-1" role="dialog" id="formVinculo">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Vincular Questão</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/questoes/add/vinculo">
                    <input value="{{$questao->id_questao}}" name="id_questao" type="hidden">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <select class="form-control my-2" name="id_assunto">
                                <option value="">Selecione um assunto</option>
                                @foreach($allAssuntos as $assunto)
                                    <option value="{{$assunto->id_assunto}}">{{$assunto->ds_assunto}}</option>
                                    @if(isset($assunto->filho))
                                        @foreach($assunto->filho as $key=>$filho)
                                    <option value="{{$filho->id_assunto}}">--{{$filho->ds_assunto}}</option>
                                        @endforeach
                                     @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control my-2" name="id_banca">
                                <option value="">Selecione uma banca</option>
                                @foreach($allBancas as $banca) <option value="{{$banca->id_banca}}">{{$banca->no_banca}}</option> @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control my-2" name="id_orgao">
                                <option value="">Selecione um órgão</option>
                                @foreach($allOrgaos as $orgao) <option value="{{$orgao->id_orgao}}">{{$orgao->no_orgao}}</option> @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-custom-secondary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
