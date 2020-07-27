@extends('Templates.template')

@section('content')





    <div class="container" style="font-family: 'Century Gothic'">



        <div class="row justify-content-center">
        @php
            /** @var TYPE_NAME $solicitacao */


            $produto=$solicitacao->find($solicitacao->id)->relProduto;
        @endphp



            <ul class="list-group mt-5">
                <li class="list-group-item list-group-item-success text-center" ><b>Solicitação Nº: {{$solicitacao->id}}</b></li>
                <li class="list-group-item">Item: {{$solicitacao->item}}</li>
                <li class="list-group-item">Tipo: {{$solicitacao->tipo}}</li>
                <li class="list-group-item">Descrição: {{$solicitacao->descricao}}</li>
                <li class="list-group-item">QTd Por caixa: {{$solicitacao->qtdUni}}</li>
                <li class="list-group-item">Quantidade: {{$solicitacao->unidade}}</li>
                <li class="list-group-item">Medição: {{$solicitacao->tipoUni}}</li>
                <li class="list-group-item">Data de abertura: {{$solicitacao->dataAbertura}}</li>
                <li class="list-group-item">Data Final: {{$solicitacao->dataFinal}}</li>
                <li class="list-group-item">Produto Escolhido:<a href="{{url("produtos/$produto->id")}}" style="color: #c51f1a">{{$produto->name}}</a></li>
            </ul>





    </div>
    </div>
@endsection
