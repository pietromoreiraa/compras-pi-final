@extends('Templates.template')

@section('content')





    <div class="container" style="font-family: 'Century Gothic'">

        <h1 class="text-center mt-5 mb-2">Informações do Produto</h1>

        <div class="row justify-content-center">
        @php
            /** @var TYPE_NAME $produto */
            $user=$produto->find($produto->id)->relUsers;

            $fornecedor=$produto->find($produto->id)->relFornecedor;
        @endphp

        <table class="table text-center table table-striped table-responsive-lg">
            <thead style="background-color: #1b1e21; color: white" class="text-center">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Fonecedor</th>
                <th scope="col">E-mail do Fornecedor</th>
                <th scope="col">Telefone</th>
                <th scope="col">Última Modificação</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <th scope="row">{{$produto->name}}</th>
                <td>{{$produto->price}}</td>
                <td><a href="{{url("fornecedor/$fornecedor->id")}}" style="color: black;"> {{$fornecedor->name}}</a></td>
                <td>{{$fornecedor->email}}</td>
                <td>{{$fornecedor->celular}}</td>
                <td>{{$user->name}} </td>

            </tr>
            </tbody>
        </table>

    </div>
    </div>
@endsection
