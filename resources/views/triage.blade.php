@extends('Templates.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Solicitação registrada com Sucesso</div>

                <div class="card-body">
                   <a href="{{url('')}}">Voltar a home</a><br>
                    <a href="{{url('solicitacao/create')}}">Fazer outra solicitação?</a>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
