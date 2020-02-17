@extends('layout.layout')
@section('content')
    <section id="orgaos">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(!empty($allBancas))
                         <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1>Bancas</h1>
                            <a class="btn btn-custom-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Adicionar Novo</a>
                        </div>
                        <div class="card-body">
                            <div class="collapse float-right my-3" id="collapseExample">
                                <form class="form-inline" method="POST" action="/bancas/add">
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control" value="" name="no_banca" type="text" autofocus placeholder="Nome da Banca">
                                        <button type="submit" class="btn btn-custom-secondary mx-2">Adicionar</button>
                                    </div>
                                </form>
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome da Banca</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allBancas as $banca)
                                    <tr>
                                        <td>
                                            {{$banca->id_banca}}
                                        </td>
                                        <td>
                                            {{$banca->no_banca}}
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
