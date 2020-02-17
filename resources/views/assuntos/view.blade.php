@extends('layout.layout')
@section('content')
    <section id="orgaos">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(!empty($allAssuntos))
                        <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1>Assuntos</h1>
                            <a class="btn btn-custom-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Adicionar Novo</a>
                        </div>
                        <div class="card-body">
                            <div class="collapse float-right my-3" id="collapseExample">
                                <form class="form-inline" method="POST" action="/assuntos/add">
                                    @csrf
                                    <div class="form-group">
                                        <select class="form-control mx-2" id="tipoassunto" name="tipoassunto">
                                            <option value="">Selecione o tipo de assunto</option>
                                            <option value="pai">Pai</option>
                                            <option value="filho">Filho</option>
                                        </select>
                                        <select class="form-control mx-2" name="id_assunto" id="list-pai" style="display: none;">
                                            <option value="">Selecione o assunto pai</option>
                                            @foreach($allAssuntos as $assunto)
                                            <option value="{{$assunto->id_assunto}}">{{$assunto->ds_assunto}}</option>
                                            @endforeach
                                        </select>
                                        <input class="form-control" value="" name="ds_assunto" type="text" autofocus placeholder="Nome do assunto">
                                        <button type="submit" class="btn btn-custom-secondary mx-2">Adicionar</button>
                                    </div>
                                </form>
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Assunto</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allAssuntos as $keyAss => $assunto)
                                    <tr>
                                        <th>{{$keyAss}}</th>
                                        <th>{{$assunto->ds_assunto}}</th>
                                    </tr>
                                    @if(isset($assunto->filho))
                                        @foreach($assunto->filho as $key=>$filho)
                                            <tr>
                                        <td>{{$keyAss}}.{{$key}}</td>
                                        <td>----{{$filho->ds_assunto}}</td>
                                    </tr>
                                        @endforeach
                                     @endif
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
    <script>
        $('#tipoassunto').change(function(){
           if($(this).val() == 'filho'){
               $('#list-pai').show()
           }else{
               $('#list-pai').hide()
           }
        });
    </script>
@endsection
