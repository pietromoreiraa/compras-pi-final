@extends('Templates.template')

@section('content')

    <h1 class="text-center">Cadastrar Produto</h1>



    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center m-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                {{$erro}}<br>
                    @endforeach
            </div>
        @endif

        <form name="formProdutos" id="formProdutos" method="post" action="{{url('produtos')}}">
            @csrf
            <select class="form-control" name="id_fornecedor" id="id_fornecedor" required>
                <option value="">Fornecedor</option>
                @foreach($fornecedor as $fornecedores)
                    <option value="{{$fornecedores->id}}">{{$fornecedores->name}}</option>
                @endforeach
            </select><br>
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome do Produto" required><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço" required><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar"><br>

        </form>
    </div>

@endsection
