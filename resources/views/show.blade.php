@extends('Templates.template')

@section('content')





    <div class="container col-8" style="font-family: 'Century Gothic'">

        @php
            /** @var TYPE_NAME $produto */
            $user=$produto->find($produto->id)->relUsers;

            $fornecedor=$produto->find($produto->id)->relFornecedor;
        @endphp

        <ul class="list-group mt-5">
            <li class="list-group-item list-group-item-success text-center" ><b>Informaçãoes do Produto</b></li>
            <li class="list-group-item">Nome: {{$produto->name}}</li>
            <li class="list-group-item">Preço: R$ {{number_format($produto->price,2,'.',',')}}</li>
            <li class="list-group-item">Fornecedor:<a href="{{url("fornecedor/$fornecedor->id")}}" style="color: #3f9ae5;">{{$fornecedor->name}}</a></li>
            <li class="list-group-item">E-mail do Fornecedor: {{$fornecedor->email}}</li>
            <li class="list-group-item">Telefone: {{$fornecedor->celular}}</li>
            <li class="list-group-item">Última Modificação: {{$user->name}}</li>

        </ul>





    </div>

@endsection
