@extends('layouts.app')

@section('content')
    <nav class="navbar bg-body-tertiary" id="navBar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="{{ asset('images/logo_cesae-cores_horizontal.png') }}" alt="CESAE" id="logoBrand">
            </a>
            <div class="d-flex ms-auto">
                <a class="d-flex align-items-center">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div id="icons">
                                <i class="fa-regular fa-circle-user"></i>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-center">
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item bg-transparent border-0 text-dark">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <aside class="main-menu">
        <ul>
            <li>
                <a href="{{ route('users.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="nav-text">
                        Usuários
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="{{ route('reservations.index') }}">
                    <i class="fa fa-globe"></i>
                    <span class="nav-text">
                        Reservas
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="{{ route('stats') }}">
                    <i class="fa fa-comments"></i>
                    <span class="nav-text">
                        Estatíticas
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="{{ route('locals.index') }}">
                    <i class="fa fa-camera-retro"></i>
                    <span class="nav-text">
                        Locais
                    </span>
                </a>

            </li>
            <li>
                <a href="{{ route('rooms.index') }}">
                    <i class="fa fa-film"></i>
                    <span class="nav-text">
                        Salas
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('courses.index') }}">
                    <i class="fa fa-book"></i>
                    <span class="nav-text">
                        Cursos
                    </span>
                </a>
            </li>
        </ul>
    </aside>

    @yield('content')

    <footer class="footer-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 text-center">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2024 CESAE Book Space. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
@endsection