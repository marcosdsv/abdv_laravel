@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


<!--cadastro do nome-->
                        <div class="form-group>
						row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Digite seu nome completo">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu e-mail válido">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<!--cadastro de rg-->
                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">{{ __('RG') }}</label>

                            <div class="col-md-6">
                                <input id="rg" type="number" class="form-control @error('rg') is-invalid @enderror" name="rg" value="{{ old('rg') }}" required autocomplete="rg" autofocus placeholder="Digite seu rg válido">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<!--cadastro de cpf-->
						                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="number" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus placeholder="Digite seu cpf válido">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<!--cadastro de data de nascimento-->
						                        <div class="form-group row">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data de nascimento') }}</label>

                            <div class="col-md-6">
                                <input id="data_nascimento" type="date" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{ old('data_nascimento') }}" required autocomplete="data_nascimento" autofocus placeholder="Digite sua data de nascimento">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--cadastro de telefone-->
						                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus placeholder="Digite seu telefone fixo">
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--cadastro de celular-->
						                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular" autofocus placeholder="Digite seu telefone celular">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


<!--cadastro de tipo de deficiência-->
						                        <div class="form-group row">
                            <label for="deficiencia" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de deficiência') }}</label>

                            <div class="col-md-6">
                                <select id="deficiencia" class="form-control @error('deficiencia') is-invalid @enderror" name="deficiencia" value="{{ old('deficiencia') }}" required autocomplete="celular" autofocus>
								<option>visual</option>
<option>subnormal</option>
</select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


<div id="cadastro_endereco">
<!--cadastro do cep-->
						                        <div class="form-group row">
                            <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('CEP') }}</label>

                            <div class="col-md-6">
                                <input id="cep" type="number" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep" autofocus placeholder="Digite seu cep">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--cadastro de uf-->
						                        <div class="form-group row">
                            <label for="uf" class="col-md-4 col-form-label text-md-right">{{ __('UF') }}</label>

                            <div class="col-md-6">
                                <input id="uf" type="text" class="form-control @error('uf') is-invalid @enderror" name="uf" value="{{ old('uf') }}" required autocomplete="uf" autofocus placeholder="Digite seu estado">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--cadastro de municipio-->
						                        <div class="form-group row">
                            <label for="municipio" class="col-md-4 col-form-label text-md-right">{{ __('Município') }}</label>

                            <div class="col-md-6">
                                <input id="municipio" type="text" class="form-control @error('municipio') is-invalid @enderror" name="municipio" value="{{ old('municipio') }}" required autocomplete="municipio" autofocus placeholder="Digite seu município">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--cadastro de logradouro-->
						                        <div class="form-group row">
                            <label for="logradouro" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                            <div class="col-md-6">
                                <input id="logradouro" type="text" class="form-control @error('logradouro') is-invalid @enderror" name="logradouro" value="{{ old('logradouro') }}" required autocomplete="logradouro" autofocus placeholder="Digite seu endereço">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--cadastro de bairro-->
						                        <div class="form-group row">
                            <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro" autofocus placeholder="Digite seu bairro">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--cadastro de numero-->
						                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Número') }}</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero" autofocus placeholder="Digite o número do seu endereço">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--cadastrar complemento-->
						                        <div class="form-group row">
                            <label for="complemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>

                            <div class="col-md-6">
                                <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}" required autocomplete="complemento" autofocus placeholder="Digite o complemento">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma a Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
													<button type="button" class="btn btn-primary" onclick="mostrar()">
{{ __('Avançar') }}
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(){
			$('#cep').change(function(){
				$.ajax({
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				dataType: 'json',
				success: function(resposta){
										$("#uf").val(resposta.uf);
																									$("#bairro").val(resposta.bairro);
																				$("#municipio").val(resposta.localidade);
					$("#logradouro").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
				}
			});
			});
		});
	

function mostrar(){
var dd = document.getElementById("dados_pessoais").style.display = 'none';
//alert(dd);
}

	</script>