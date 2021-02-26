@extends('layouts.app')
@section('content')
<form method="post" action="{{route('noticias.store')}}" enctype="multipart/form-data">
@csrf
                        <div class="form-group>
						row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('T�tulo') }}</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo" autofocus placeholder="Digite o t�tulo do relat�rio">

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group>
						row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descri��o') }}</label>

                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao') }}" required autocomplete="descricao" autofocus placeholder="Digite a descri��o do relat�rio">

                                @error('descricao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group>
						row">
                            <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link mat�ria') }}</label>

                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" autocomplete="link" autofocus placeholder="coloque o link da mat�ria realizada">

                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group>
						row">
                            <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Link V�deo') }}</label>

                            <div class="col-md-6">
                                <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}" required autocomplete="video" autofocus placeholder="coloque o link do v�deo do youtube">

                                @error('video')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group>
						row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto 1') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus placeholder="insera a foto">

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group>
						row">
                            <label for="descimg1" class="col-md-4 col-form-label text-md-right">{{ __('Descri��o da imagem') }}</label>

                            <div class="col-md-6">
                            <textarea id="descimg1" class="form-control @error('descimg1') is-invalid @enderror" name="descimg1" value="{{ old('descimg1') }}" required autocomplete="descimg1" autofocus placeholder="insira a descri��o da imagem 1" rows="4" cols="20">
</textarea>
                                @error('descimg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
</form>
@endsection;