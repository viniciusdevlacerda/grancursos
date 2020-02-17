@extends('layout.layout')
@section('content')
    <section id="quiz">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
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
            @if(isset($result))
            <div class="row mt-5">
                <div class="col-12">
                    @foreach($filterResult as $result)
                        <div class="card card-body my-2"><h2 class="card-title">{{$result['ds_assunto']}}</h2></div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection
