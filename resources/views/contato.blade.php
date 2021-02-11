@extends('layouts.app')
@section('content')
<p>Por favor, para entrar em contato conosco, preencha o formulário abaixo, ou se preferir,
Nos envie um e-mail para contato@abdv.org.br</p>
<form method="post" action="{{route('email.contatos')}}">
@csrf
<h1>página de contatos</h1>
                        <div class="form-group>
						row">
                            <label for="assunto" class="col-md-4 col-form-label text-md-right">{{ __('Assunto') }}</label>

                            <div class="col-md-6">
                                <input id="assunto" type="text" class="form-control @error('assunto') is-invalid @enderror" name="assunto" value="{{ old('assunto') }}" required autocomplete="assunto" autofocus placeholder="Digite o assunto do e-mail">

                                @error('assunto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group>
						row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Digite seu e-mail válido">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						                        <div class="form-group>
						row">
                            <label for="corpo" class="col-md-4 col-form-label text-md-right">{{ __('Corpo do e-mail') }}</label>

                            <div class="col-md-6">
                            <textarea id="corpo" class="form-control @error('corpo') is-invalid @enderror" name="corpo" value="{{ old('corpo') }}" required autocomplete="corpo" autofocus placeholder="digite o conteúdo do e-mail" rows="4" cols="20">
</textarea>
                                @error('corpo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
						</form>
@endsection;