@extends('Templates.template')

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="text-center mt-3 mb-4">
                    <h1 class="text-center">Produtos</h1>
                </div>
                <div class="text-center mt-3 mb-4">
                    <a href="{{url('produtos/create')}}">
                        <button class="btn btn-success">Cadastrar</button>
                    </a>
                </div>
                <table class="table text-center table table-striped table-dark">
                    <thead class="thead-dark">

                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ação</th>


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
                            <td>R$ {{number_format($produtos->price,2,'.',',')}}</td>
                            <td>{{$fornecedor->name}}</td>
                            <td>
                                <a href="{{url("produtos/$produtos->id")}}">
                                    <button class="btn btn-primary">Visualizar</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

