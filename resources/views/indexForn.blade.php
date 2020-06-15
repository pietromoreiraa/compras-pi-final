@extends('Templates.template')

@section('content')

    <h1 class="text-center">Fornecedores</h1>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('fornecedor/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">E-mail</th>
                <th scope="col">Celular</th>
                <th scope="col">Action</th>


            </tr>
            </thead>
            <tbody>
                @foreach($fornecedor as $fornecedores)

                    <tr>
                        <th scope="row">{{$fornecedores->id}}</th>
                        <td>{{$fornecedores->name}}</td>
                        <td>{{$fornecedores->email}}</td>
                        <td>{{$fornecedores->celular}}</td>
                        <td>
                            <a href="{{url("fornecedor/$fornecedores->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach





            </tbody>
        </table>


    </div>

@endsection
