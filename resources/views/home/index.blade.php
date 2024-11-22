<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CESAE Book Space</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="{{ asset('js/main.js') }}" defer></script>
</head>

<body>
    <nav class="navbar bg-body-tertiary" id="navBar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="{{ asset('images/logo_cesae-cores_horizontal.png') }}" alt="CESAE" id="logoBrand">
            </a>
            <div class="d-flex ms-auto">
                <a class="d-flex align-items-center me-3">
                    <div id="icons">
                        <i class="fa-regular fa-bell"></i>
                    </div>
                </a>
                <a class="d-flex align-items-center">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div id="icons">
                                <i class="fa-regular fa-circle-user"></i>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-center">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item bg-transparent border-0 text-dark">Logout</button>
                                </form>
                            </li>
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <aside class="main-menu">
        <ul>
            <li>
                <a href="">
                    <i class="fa fa-home"></i>
                    <span class="nav-text">
                        Community Dashboard
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-globe"></i>
                    <span class="nav-text">
                        Global Surveyors
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-comments"></i>
                    <span class="nav-text">
                        Group Hub Forums
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-camera-retro"></i>
                    <span class="nav-text">
                        Survey Photos
                    </span>
                </a>

            </li>
            <li>
                <a href="#">
                    <i class="fa fa-film"></i>
                    <span class="nav-text">
                        Surveying Tutorials
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span class="nav-text">
                        Surveying Jobs
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span class="nav-text">
                        Tools & Resources
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-map-marker"></i>
                    <span class="nav-text">
                        Member Map
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-info"></i>
                    <span class="nav-text">
                        Documentation
                    </span>
                </a>
            </li>
        </ul>
    </aside>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script> {{--  Bootstrap JS --}}

</html>
