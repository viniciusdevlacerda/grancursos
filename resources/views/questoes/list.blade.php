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
                                <h1>Questões Cadastradas</h1>
                                <a class="btn btn-custom-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Adicionar Novo</a>
                            </div>
                            <div class="card-body">
                                <div class="collapse float-right my-3" id="collapseExample">
                                    <form class="form-inline" method="POST" action="/questoes/add">
                                        <input name="ds_assunto" id="ds_assunto" value="" type="hidden">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control mx-2" value="" name="tx_questao" type="text" autofocus placeholder="Descrição da questão" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control mx-2" name="id_assunto" id="id_assunto" required>
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
                                            <select class="form-control mx-2" name="id_banca" required>
                                                <option value="">Selecione uma banca</option>
                                                @foreach($allBancas as $banca) <option value="{{$banca->id_banca}}">{{$banca->no_banca}}</option> @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control mx-2" name="id_orgao" required>
                                                <option value="">Selecione um órgão</option>
                                                @foreach($allOrgaos as $orgao) <option value="{{$orgao->id_orgao}}">{{$orgao->no_orgao}}</option> @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-custom-secondary mx-2">Adicionar</button>

                                    </form>
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Questão</th>
                                        <th>Assunto</th>
                                        <th>Órgão</th>
                                        <th>Banca</th>
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
                                                {{$questao->ds_assunto}}
                                            </td>
                                            <td>
                                                {{$questao->no_orgao}}
                                            </td>
                                            <td>
                                                {{$questao->no_banca}}
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
    <script>
        $('#id_assunto').change(function () {
            $('#ds_assunto').val($(this).find(' option[value=' + $(this).val() + ']').text());
        });
    </script>
@endsection
