@extends('Templates.template')

@section('content')



    <div class="text-center mt-5 mb-4" style="font-family: 'Century Gothic'">

        <h1 class="text-center">Solicitações</h1>

        <a href="{{url('solicitacao/create')}}">
            <button class="btn btn-success">Fazer uma nova solicitação?</button>
        </a>
    </div>

    <div class="col-md-8 m-auto container-fluid">
        <table class="table text-center table table-striped table-responsive-lg">
            <thead style="background-color: #1b1e21; color:white">

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
                <th scope="col">Cotação</th>


            </tr>

            </thead>
            <tbody class="container-group">
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
                    <td>@if($solicitacoes->status==1) Aberto @elseif($solicitacoes->status==2) Finalizado @else Fechado @endif</td>
                    <td>
                        @if($solicitacoes->status==2)
                        <a href="{{url("solicitacao/$solicitacoes->id")}}">
                            <button class="btn btn-success">
                                <i class="fas fa-eye"></i>
                            </button>
                        </a>
                            @elseif($solicitacoes->status==1)

                            <a href="{{url("cotacao/$solicitacoes->id/edit")}}">
                                <button class="btn btn-warning" type="filled">
                                    <i class="fa fa-list-ul" aria-hidden="true"></i>
                                </button>
                            </a>
                            @else
                            <a href="{{url("solicitacao/$solicitacoes->id/edit")}}">
                                <button class="btn btn-danger">
                                    <i class="fas fa-plus-circle" ></i>
                                </button>
                            </a>
                            @endif
                    </td>
                </tr>
                @endforeach



            </tbody>
        </table>


    </div>

@endsection
