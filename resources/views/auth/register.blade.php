@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Apellido_Paterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido_Paterno') }}</label>

                            <div class="col-md-6">
                                <input id="Apellido_Paterno" type="text" class="form-control @error('Apellido_Paterno') is-invalid @enderror" name="Apellido_Paterno" value="{{ old('Apellido_Paterno') }}" required autocomplete="Apellido_Paterno" autofocus>

                                @error('Apellido_Paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Apellido_Materno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido_Materno') }}</label>

                            <div class="col-md-6">
                                <input id="Apellido_Materno" type="text" class="form-control @error('Apellido_Materno') is-invalid @enderror" name="Apellido_Materno" value="{{ old('Apellido_Materno') }}" required autocomplete="Apellido_Materno" autofocus>

                                @error('Apellido_Materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>

                            <div class="col-md-6">
                                <input id="Cedula" type="text" class="form-control @error('Cedula') is-invalid @enderror" name="Cedula" value="{{ old('Cedula') }}" required autocomplete="Cedula" autofocus>

                                @error('Cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Especialidad" class="col-md-4 col-form-label text-md-right">{{ __('Especialidad') }}</label>

                            <div class="col-md-6">
                                <input id="Especialidad" type="text" class="form-control @error('Especialidad') is-invalid @enderror" name="Especialidad" value="{{ old('Especialidad') }}" required autocomplete="Especialidad" autofocus>

                                @error('Especialidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Especialidad_Adicional" class="col-md-4 col-form-label text-md-right">{{ __('Especialidad_Adicional') }}</label>

                            <div class="col-md-6">
                                <input id="Especialidad_Adicional" type="text" class="form-control @error('Especialidad_Adicional') is-invalid @enderror" name="Especialidad_Adicional" value="{{ old('Especialidad_Adicional') }}" required autocomplete="Especialidad" autofocus>

                                @error('Especialidad_Adicional')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Clinica" class="col-md-4 col-form-label text-md-right">{{ __('Clinica') }}</label>

                            <div class="col-md-6">
                                <input id="Clinica" type="text" class="form-control @error('Clinica') is-invalid @enderror" name="Clinica" value="{{ old('Clinica') }}" required autocomplete="Clinica" autofocus>

                                @error('Clinica')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Num_Telefonico" class="col-md-4 col-form-label text-md-right">{{ __('Num_Telefonico') }}</label>

                            <div class="col-md-6">
                                <input id="Num_Telefonico" type="text" class="form-control @error('Num_Telefonico') is-invalid @enderror" name="Num_Telefonico" value="{{ old('Num_Telefonico') }}" required autocomplete="Num_Telefonico" autofocus>

                                @error('Num_Telefonico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
 