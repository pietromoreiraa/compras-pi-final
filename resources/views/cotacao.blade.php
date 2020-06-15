@extends('Templates.template')

@section('content')

    <h1 class="text-center">Fazer Solicitação</h1>



    <div class="col-8 m-auto">



        <form name="formSolicitacao" id="formSolicitacao" method="post" action="{{url("solicitacao/$solicitacao->id")}}">
            @method('PUT')
            @csrf
            <input class="form-control" type="text" name="dataFinal" id="dataFinal" placeholder="Data necessidade" required><br>

            <br><input class="btn btn-primary" type="submit" value="Cadastrar"><br>

        </form>
    </div>

@endsection
