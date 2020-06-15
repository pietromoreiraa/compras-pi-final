@extends('Templates.template')

@section('content')


    <div id="app">
        <indexp></indexp>
    </div>
    <a href="{{url('produtos/create')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>

    @foreach($produto as $produtos)
        @php
            /** @var TYPE_NAME $produtos */
            $fornecedor=$produtos->find($produtos->id)->relFornecedor;
        @endphp
        <tr>
            <th scope="row">{{$produtos->id}}</th>
            <td>{{$produtos->name}}</td>
            <td>{{$produtos->price}}</td>
            <td>{{$fornecedor->name}}</td>
            <td>
                <a href="{{url(" produtos/$produtos->id")}}">
                    <button class="btn btn-dark">Visualizar</button>
                </a>
                <a href="">
                    <button class="btn btn-primary">Editar</button>
                </a>
                <a href="">
                    <button class="btn btn-danger">Deletar</button>
                </a>
            </td>
        </tr>


    @endforeach
    <script src="{{mix('js/app.js')}}"></script>

@endsection
