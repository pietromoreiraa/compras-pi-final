@extends('Templates.template')

@section('content')



    <div class="container" style="font-family: 'Century Gothic'">
        <div class="row justify-content-center ">
            <div class="col-md-8 mt-5">

                <div class="text-center">

                    <div class=" text-center ">
                        <h1 class="text-center" >Produtos</h1>
                    </div>

                    <div class=" mb-2 text-center">
                        <a href="{{url('produtos/create')}}">
                            <button class="btn btn-success" >Cadastrar um novo produto?</button>
                        </a>
                    </div>

                <div>
                <table class="table  text-center table table-striped table-responsive-lg">
                    <thead style="background-color: #1b1e21; color: white ">

                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Visualizar</th>


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
                                <a href="{{url("produtos/$produtos->id")}}" class="btn btn-secondary">
                                    <i class="fas fa-search"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>

@endsection

