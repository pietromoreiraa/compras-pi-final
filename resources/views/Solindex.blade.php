@extends('Templates.template')

@section('content')

    <h1 class="text-center">Solicitações</h1>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('solicitacao/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table text-center table table-striped table-dark">
            <thead class="btn-dark">

            <tr>
                <th scope="col">Código</th>
                <th scope="col">Item</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descrição</th>
                <th scope="col">QTD por caixa</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Medição</th>
                <th scope="col">Data de abertura</th>
                <th scope="col">Data Final</th>
                <th scope="col">Status da cotação</th>
                <th scope="col">Ações</th>


            </tr>

            </thead>
            <tbody>
                @foreach($solicitacao as $solicitacoes)
                <tr>
                    <th scope="row">{{$solicitacoes->id}}</th>
                    <td>{{$solicitacoes->item}}</td>
                    <td>{{$solicitacoes->tipo}}</td>
                    <td>{{$solicitacoes->descricao}}</td>
                    <td>{{$solicitacoes->qtdUni}}</td>
                    <td>{{$solicitacoes->unidade}}</td>
                    <td>{{$solicitacoes->tipoUni}}</td>
                    <td>@if(isset($solicitacoes->dataAbertura)){{$solicitacoes->dataAbertura}}@else Não definido @endif</td>
                    <td>@if(isset($solicitacoes->dataFinal)){{$solicitacoes->dataFinal}}@else Não definido @endif</td>
                    <td>@if($solicitacoes->status==1) Aberto @else Fechado @endif</td>
                    <td>
                        @if($solicitacoes->status==0)
                        <a href="{{url("solicitacao/$solicitacoes->id/edit")}}">
                            <button class="btn btn-primary">Criar cotação</button>
                        </a>
                            @else

                            <a href="{{url("search/$solicitacoes->id")}}">
                                <button class="btn btn-primary" type="filled">Cotar</button>
                            </a>
                            @endif
                    </td>
                </tr>
                @endforeach



            </tbody>
        </table>


    </div>

@endsection
