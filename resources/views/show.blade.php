@extends('Templates.template')

@section('content')

    <h1 class="text-center">Detalhamento Produtos</h1>



    <div class="col-8 m-auto">
        @php
            /** @var TYPE_NAME $produto */
            $user=$produto->find($produto->id)->relUsers;

            $fornecedor=$produto->find($produto->id)->relFornecedor;
        @endphp

        <table class="table table-borderless table-dark">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Fonecedor</th>
                <th scope="col">E-mail do fornecedor</th>
                <th scope="col">Telefone</th>
                <th scope="col">Última Modificação</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$produto->name}}</th>
                <td>{{$produto->price}}</td>
                <td><a href="{{url("fornecedor/$fornecedor->id")}}" style="color: #ffe70a; font-weight:bold"> {{$fornecedor->name}}</a></td>
                <td>{{$fornecedor->email}}</td>
                <td>{{$fornecedor->celular}}</td>
                <td>{{$user->name}} </td>

            </tr>
            </tbody>
        </table>

    </div>

@endsection
