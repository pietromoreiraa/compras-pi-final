@extends('Templates.template')

@section('content')




<br><br>
    <div class="col-8 m-auto">

        <h1 class="text-center">Solicitação</h1>

        <form name="formSolicitacao" id="formSolicitacao" method="post" action="{{url('solicitacao')}}">
            @csrf
            <input class="form-control" type="text" name="item" id="item" placeholder="Nome do Item" required><br>
            <input class="form-control" type="text" name="tipo" id="tipo" placeholder="Tipo do Item" required><br>
            <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição"
                   required><br>

            <input class="form-control" type="text" name="qtdUni" id="qtdUni" placeholder="Quantidade Unitaria"><br>
            <input class="form-control" type="text" name="unidade" id="unidade" placeholder="QTD" required><br>
            Tipo de Medida
            <select class="form-control" name="tipoUni" id="tipoUni" required><br>
                <option>--</option>
                <option>Metro</option>
                <option>Kg</option>
                <option>Bobina</option>
                <option>Placa</option>
                <option>Número</option>
                <option>Lote</option>
                <option>Caixa</option>
            </select>
            <br><input class="btn btn-primary" type="submit" value="Cadastrar"><br>
            <br> <label> Quantidade unitária somente valido por item que vem em caixa. </label>

        </form>

    </div>




@endsection
