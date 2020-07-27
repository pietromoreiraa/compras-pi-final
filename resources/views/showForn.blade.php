@extends('Templates.template')

@section('content')









    <div class=" col-5 m-auto mt-5" style="font-family: 'Century Gothic'">

        <ul class="list-group mt-5">
            <li class="list-group-item text-center" style="background-color: #4aa0e6; color: white"><b>Detalhamento Fornecedor</b></li>
            <li class="list-group-item">Nome: {{$fornecedor->name}}</li>
            <li class="list-group-item">E-mail: {{$fornecedor->email}}</li>
            <li class="list-group-item">Celular: {{$fornecedor->celular}}</li>
        </ul>

        @php
            /** @var TYPE_NAME $fornecedor */
            $produto=$fornecedor->find($fornecedor->id)->relProduto->all();
        @endphp

        <ul class="list-group mt-5 text-center">
            <li class="list-group-item text-center" style="background-color: #27864f; color: white"><b>Produtos deste fornecedor</b></li>
            @foreach($produto as $produtos)
            <li class="list-group-item"><a href="{{url("produtos/$produtos->id")}}" style="color: #27864f; font-weight:bold ">{{$produtos->name}}</a></li>
            @endforeach
        </ul>
    </div>





@endsection
