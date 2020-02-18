@extends('layout.layout')
@section('content')
    <section id="quiz">
        <div class="container">
            <div class="row mt-5">

                <div class="col-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h1>Questões</h1>
                        </div>
                        <div class="card-body">
                            <form class="form-inline float-right" method="GET">
                                <label>Filtrar por:</label>
                                <select name="orgao" id="" class="form-control mx-2">
                                    <option>Selecione um Órgão</option>
                                    @foreach($allOrgaos as $orgao)
                                        <option value="{{$orgao->id_orgao}}">{{$orgao->no_orgao}}</option> @endforeach
                                </select>
                                <select name="banca" id="" class="form-control mx-2">
                                    <option>Selecione uma Banca</option>
                                    @foreach($allBancas as $banca)
                                        <option value="{{$banca->id_banca}}">{{$banca->no_banca}}</option> @endforeach
                                </select>

                                <button type="submit" class="btn btn-custom-tertiary mx-2">Filtrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    @if(isset($filterResult))
                        @foreach($filterResult as $key=>$result)
                        <div class="card card-header my-2">
                            <h3 class="card-title">{{$key}} - {{count($result)}} questões</h3>
                        </div>
                         @endforeach
                        @if(empty($filterResult)) <h3>Não há registros com os filtros selecionados.</h3>@endif
                    @endif
                </div>
            </div>

        </div>
    </section>
@endsection
