@extends('layout.layout')
@section('content')
    <section id="orgaos">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(!empty($allOrgaos))
                        <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1>Órgãos</h1>
                            <a class="btn btn-custom-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Adicionar Novo</a>
                        </div>
                        <div class="card-body">
                            <div class="collapse float-right my-3" id="collapseExample">
                                <form class="form-inline" method="POST" action="/orgaos/add">
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control" value="" name="no_orgao" type="text" autofocus placeholder="Nome do Órgão">
                                        <button type="submit" class="btn btn-custom-secondary mx-2">Adicionar</button>
                                    </div>
                                </form>
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Órgão</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allOrgaos as $orgao)
                                    <tr>
                                        <td>
                                            {{$orgao->id_orgao}}
                                        </td>
                                        <td>
                                            {{$orgao->no_orgao}}
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
    </section>
@endsection
