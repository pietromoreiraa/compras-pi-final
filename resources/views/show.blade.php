@extends('Templates.template')

@section('content')

    <h1 class="text-center">Produtos</h1>



    <div class="col-8 m-auto">
        @php
            /** @var TYPE_NAME $produto */
            $user=$produto->find($produto->id)->relUsers;

            $fornecedor=$produto->find($produto->id)->relFornecedor;
        @endphp

        Nome: {{$produto->name}}<br>
        Preço: R$ {{$produto->price}}<br>
        Fornecedor:<a href="{{url("fornecedor/$fornecedor->id")}}"> {{$fornecedor->name}}</a><br>
        Email do fornecedor: {{$fornecedor->email}} <br>
        Fone para contato: {{$fornecedor->celular}}<br>
        Ultima modificação por: {{$user->name}} <br>
    </div>

@endsection
