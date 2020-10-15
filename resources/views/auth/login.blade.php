@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center card-login">
        <div class="col-12 col-sm-10 col-lg-8">
            <div class="card text-sm-center text-lg-center text-md-center">
                <div class="card-body justify-content-center">
                    <h3 class="card-title mt-3 text-center">¡Hola!, Ingresa con tus datos</h3>
                    <div class="card-content mt-md-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row justify-content-center">
                                <div class="col-10 col-sm-8 col-lg-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Correo Electronico') }}" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-10 col-sm-8 col-lg-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Contraseña') }}" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-8 col-lg-6">
                                    <button type="submit" class="btn btn-block mt-3 btn-card">{{ __('Iniciar sesión') }}</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 offset-1 col-sm-5 offset-sm-1 col-lg-6 offset-lg-1">
                                    <div class="custom-control custom-checkbox mt-3 ml-lg-4">
                                        <input type="checkbox" class="form-check-input custom-control-input float-left" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">{{ __('Recuerdame') }}</label>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row mt-3 mb-4">
                                <div class="col-12 text-center">
                                    <a  class="nav-link nav-register" href="">{{ __('¿No tienes cuenta?, registrate aquí') }}</a>
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

