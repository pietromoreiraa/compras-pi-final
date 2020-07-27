@extends('Templates.template')

@section('content')


    <h1 class="text-center mt-5" style="font-family: 'Century Gothic'">Fazer Cotação</h1>


  @if($produto == 'a')

      <div class="container mt-5">
      <div class="col-12 text-center alert alert-danger " role="alert">
          Ainda não existe este produto na nossa base de dados!
      </div>
      </div>
      @else

    <div class="col-8 m-auto">



        <table class="table text-center table table-striped ">
            <thead style="background-color: #1b1e21; color: black ">

            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Ação</th>


            </tr>
            </thead>
            <tbody>

            @foreach($produto as $produtos)

                <tr>
                    <th scope="row">{{$produtos->id}}</th>
                    <td>{{$produtos->name}}</td>
                    <td>R$ {{number_format($produtos->price,2,'.',',')}}</td>

                    <td>
                        <form name="formSolicitacao" id="formSolicitacao" method="post" action="{{url("cotacao/$solicitacao->id")}}">
                            @method('PUT')
                            @csrf
                            <input class="form-control" type="hidden" name="id_produto" id="id_produto" value="{{$produtos->id}}" required><br>

                            <input class="btn btn-primary" type="submit" value="Selecionar">

                        </form>
                    </td>
                </tr>
            @endforeach
                @endif




            </tbody>
        </table>
    </div>

@endsection
