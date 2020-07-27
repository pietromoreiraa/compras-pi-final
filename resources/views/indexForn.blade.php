@extends('Templates.template')

@section('content')


<div class="container justify-content-center" style="font-family: 'Century Gothic'">
    <div class="text-center mt-5 mb-2 ml-2" >
        <h1 class="text-center">Fornecedores</h1>
        <div class="">
             <a href="{{url('fornecedor/create')}}">
            <button class="btn btn-success">Adicionar um novo fornecedor?</button>
             </a>
        </div>
    </div>


        <table class="table text-center table table-striped container table-responsive-lg">
            <thead style="background-color: #1b1e21; color: white">
            <tr class="container-fluid">
                <th scope="col">Id</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">E-mail</th>
                <th scope="col">Celular</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>

            <tbody>
                @foreach($fornecedor as $fornecedores)

                    <tr class="text-center container-fluid ">
                        <th scope="">{{$fornecedores->id}}</th>
                        <td>{{$fornecedores->name}}</td>
                        <td>{{$fornecedores->email}}</td>
                        <td>{{$fornecedores->celular}}</td>
                        <td class="container-fluid row">

                            <a href="{{url("fornecedor/$fornecedores->id")}}">
                                <button class="btn btn-secondary row">
                                    <i class="fas fa-search"></i>
                                </button>
                            </a>


                            <a href="">
                                <button class="btn btn-success row">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>


                            <a href="">
                                <button class="btn btn-danger row">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </a>


                    </tr>

                    @endforeach

            </tbody>
        </table>
</div>


@endsection
