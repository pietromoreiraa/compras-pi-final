@extends('Templates.template')

@section('content')

    <h1 class="text-center">Fornecedor</h1>



    <div class="col-8 m-auto">
        @php
            /** @var TYPE_NAME $fornecedor */
            $produto=$fornecedor->find($fornecedor->id)->relProduto->all();
        @endphp
        Nome do fornecedor: {{$fornecedor->name}}<br>
        E-mail: R$ {{$fornecedor->email}}<br>
        Celular: {{$fornecedor->celular}} <br>


       <br> <h2>Produtos deste fornecedor</h2>
                @foreach($produto as $produtos)
<a href="{{url("produtos/$produtos->id")}}">{{$produtos->name}}</a><br>
                    @endforeach
       <br> <a href="{{url("fornecedor")}}"><button class="btn btn-primary">Voltar</button></a>
    </div>

@endsection
