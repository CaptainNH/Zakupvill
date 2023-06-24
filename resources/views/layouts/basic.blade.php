<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('head')
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="margin-left: 180px; margin-right: 80px;">
            <a class="navbar-brand" href="{{ route('main') }}">Закупвиль</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('main') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('suppliers') }}">Товары</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"
                        style="margin-right: 20px; padding-top: 10px;"><span class="material-symbols-outlined">
                            search
                        </span></button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-outline-success" href="{{ route('basket') }}"
                            style="margin-right: 20px; padding-top: 10px;">
                            <span class="material-symbols-outlined">
                                shopping_cart
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Панель администратора</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container" id="container" style="min-height: 100vh">
            @yield('content')
        </div>
    </main>

    <div class="container">
        <footer class="py-2 bg-light">
            <div class="container">
                <p class="m-0 text-center">© 2023 Закупвиль</p>
            </div>
        </footer>
        @yield('modal')
    </div>
    @yield('script')
</body>

</html>
