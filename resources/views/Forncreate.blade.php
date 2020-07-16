@extends('Templates.template')

@section('content')


    <h1 class="text-center">Cadastrar Fornecedor</h1>



    <div class="col-8 m-auto">
        @if(isset($errors) && count($errors)>0)
            <div class="text-center m-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif



        <form name="formFornecedor" id="formFornecedor" method="post" action="{{url('fornecedor')}}">
            @csrf
            <input class="form-control" type="text" name="name" id="name" placeholder="Fornecedor" required><br>

            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail do Fornecedor" required><br>
            <input class="form-control" type="text" name="celular" id="celular" placeholder="Celular do Fornecedor" required><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar"><br>

        </form>
    </div>

@endsection
