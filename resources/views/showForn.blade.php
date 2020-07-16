@extends('Templates.template')

@section('content')

    <h1 class="text-center">Detalhamento Fornecedor</h1>



    <div class="col-8 m-auto">
        <table class="table table-borderless table-dark">
            <thead>
        @php
            /** @var TYPE_NAME $fornecedor */
            $produto=$fornecedor->find($fornecedor->id)->relProduto->all();
        @endphp
        <tr>
            <th scope="col">Nome do fornecedor</th>
            <th scope="col">E-mail</th>
            <th scope="col">Celular</th>
            <th scope="col">Produtos</th>
        </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$fornecedor->name}}</th>
                <td>{{$fornecedor->email}}</td>
                <td>{{$fornecedor->celular}}</td>

            </tr>



            </tbody>


            <tr>
                <th scope="row">Produtos deste fornecedor</th>
                <td colspan="2"></td>
                @foreach($produto as $produtos)
                <td><a href="{{url("produtos/$produtos->id")}}" style="color: #ffe70a; font-weight:bold ">{{$produtos->name}}</a><br></td>
                @endforeach
            </tr>



       <br>



        </table>

       <br> <a href="{{url("fornecedor")}}"><button class="btn btn-primary">Voltar</button></a>

    </div>





@endsection
