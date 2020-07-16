@extends('Templates.template')

@section('content')

    <h1 class="text-center">Produtos</h1>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('produtos/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table text-center table table-striped table-dark">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produto as $produtos)
                @php
                    /** @var TYPE_NAME $produtos */
                        $fornecedor=$produtos->find($produtos->id)->relFornecedor;
                @endphp
                <tr>
                    <th scope="row">{{$produtos->id}}</th>
                    <td>{{$produtos->name}}</td>
                    <td>{{$produtos->price}}</td>
                    <td>{{$fornecedor->name}}</td>
                    <td>
                        <a href="{{url("produtos/$produtos->id")}}">
                            <button class="btn btn-dark">Selecionar</button>
                        </a>

                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>


    </div>

@endsection
