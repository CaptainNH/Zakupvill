<!DOCTYPE html>
<html lang="en">

<head>
    <title>Закупвиль</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="resources/css/style.css"> --}}
    @vite(['resources/css/style.css'])
    <style>
        div.col-md-6 a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body class="goto-here">
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
                {{-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"
                        style="margin-right: 20px; padding-top: 10px;"><span class="material-symbols-outlined">
                            search
                        </span></button>
                </form> --}}
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
    <div class="slider-item" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container" style="height: 100%; ">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true"
                style="height: 100%">

                <div class="col-md-12 ftco-animate text-center" style="z-index: 3;">
                    <h1 class="" style="font-size: 100px; font-weight: 800;">Закупвиль</h1>
                    <h2 class="subheading" style="font-size: 40px; font-weight: 600; letter-spacing: 3px;">
                        помогаем поставщикам
                        и оптовым покупателям находить друг друга</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-4">
            <div class="col-md-6">
                <a href="/suppliers">
                    <div class="d-flex align-items-center" style="height: 160px;">
                        <img src="images/package.png" alt="" style="padding-bottom: 30px;">

                        <div class="mb-5 pr-5" style="margin-left: 11px;">
                            <!-- <div style="height: 20px;"></div> -->
                            <h2 class="mb-2"> Поставщики </h2>
                            <div class="text-muted text-md">База&nbsp;оптовых&nbsp;поставщиков
                                и&nbsp;производителей&nbsp;товаров</div>
                        </div>
                    </div>
                </a>

                <a href="/suppliers">
                    <div class="d-flex align-items-center" style="height: 160px;">
                        <img src="images/cart.png" alt="" style="padding-bottom: 30px;">

                        <div class="mb-5 pr-5" style="margin-left: 11px;">
                            <!-- <div style="height: 20px;"></div> -->
                            <h2 class="mb-2"> Товары </h2>
                            <div class="text-muted text-md">Найти товары от&nbsp;производителей и&nbsp;поставщиков
                            </div>
                        </div>
                    </div>

                </a>

            </div>
            <div class="col-md-6">
                <a href="/about">
                    <div class="d-flex align-items-center" style="height: 160px;">
                        <img src="images/store.png" alt="" style="padding-bottom: 30px;">

                        <div class="mb-5 pr-5" style="margin-left: 11px;">
                            <!-- <div style="height: 20px;"></div> -->
                            <h2 class="mb-2"> О нас </h2>
                            <div class="text-muted text-md">Узнайте больше о веб-ресурсе "Закупвиль"</div>
                        </div>
                    </div>

                </a>
                <a href="/home">
                    <div class="d-flex align-items-center" style="height: 160px;">
                        <img src="images/man.png" alt="" style="padding-bottom: 30px;">

                        <div class="mb-5 pr-5" style="margin-left: 11px;">
                            <!-- <div style="height: 20px;"></div> -->
                            <h2 class="mb-2"> Я поставщик </h2>
                            <div class="text-muted text-md">Личный кабинет и возможность добавить свои товары для
                                всех</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="py-2 bg-light">
            <div class="container">
                <p class="m-0 text-center">© 2023 Закупвиль</p>
            </div>
        </footer>
        @yield('modal')
    </div>


</body>

</html>
