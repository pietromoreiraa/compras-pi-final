@extends('Templates.template')

@section('content')

<style>


    .card-body{
        font-family: "Century Gothic";
        background-color: #1b1e21;
        color: white;
        font-weight: bold;
    }

</style>
    <div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body mt-5" >
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" >{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">


                                <div >
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text pretty p-default" >


                                                <input type="checkbox" aria-label="Radio button for following text input" onclick="myFunction()"/>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </div>



                                </div>
                               <script>
                                   function myFunction() {
                                       var x = document.getElementById("password");
                                       if (x.type === "password") {
                                           x.type = "text";
                                       } else {
                                           x.type = "password";
                                       }
                                   }
                               </script>


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Entrar') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
