<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ABDV</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://www.google.com.br/" target="blank">Webmail</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Início <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Diretoria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.radios.com.br/aovivo/radio-mdv-brasilia/145488" target="blank">Rádio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Estatuto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('eventos.index') }}">{{ __('Eventos') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('esportes.index') }}">{{ __('Esportes') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('noticias.index') }}">{{ __('Notícias') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('relatorios.index') }}">{{ __('Relatório de atividades') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contatos') }}">{{ __('Contatos') }}</a>
      </li>
	     <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>
  </div>
</nav>