@extends('layouts.app')
@section('content')
<form method="post" action="{{route('relatorios.store')}}>
                        <div class="form-group>
						row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo" autofocus placeholder="Digite o título do relatório">

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group>
						row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao') }}" required autocomplete="descricao" autofocus placeholder="Digite a descrição do relatório">

                                @error('descricao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group>
						row">
                            <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Link Vídeo') }}</label>

                            <div class="col-md-6">
                                <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}" required autocomplete="video" autofocus placeholder="coloque o link do vídeo do youtube">

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
                            <label for="descimg1" class="col-md-4 col-form-label text-md-right">{{ __('Descrição da imagem') }}</label>

                            <div class="col-md-6">
                            <textarea id="descimg1" class="form-control @error('descimg1') is-invalid @enderror" name="descimg1" value="{{ old('descimg1') }}" required autocomplete="descimg1" autofocus placeholder="insira a descrição da imagem 1" rows="4" cols="20">
</textarea>
                                @error('descimg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

</form>
@endsection;