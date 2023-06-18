<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
    <style>
        p {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
        }

        .r img {
            width: 30px;
            height: 30px;
        }

        .rating {
            color: green;
            font-size: 30px;
        }

        .r {
            display: flex;
            align-items: center;

        }

        .r * {
            margin: 0 15px 0 0;
        }

        .card {
            margin: 20px 0;

        }
    </style>
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
                        <a class="nav-link" href="{{ route('products') }}">Товары</a>
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
        <div class="container" style="height: 100vh;">
            <!-- <br>
            <img src="images/like (1).png" alt="">
            <img src="images/like (2).png" alt="">
            <img src="images/like (3).png" alt="">
            <img src="images/thumbs-up.png" alt="">
            <img src="images/thumbs-up (1).png" alt=""> -->
            <a href="">
                <div class="card" style="padding: 20px; ">
                    <div class="d-flex" style="justify-content: space-between;">
                        <div>
                            <h2>ООО "Фермер" </h2>
                            <div class="r">
                                <img src="images/thumbs-up (1).png" alt=""> <span class="rating">+50</span>
                            </div>
                            <p>Улица Пушкина, дом 69</p>
                            <p>Код: 1234567890</p>
                            <p>Номер телефона: 8 918 703 07 75</p>

                        </div>
                        <img src="images/ferm.jpg" alt="" width="150px" height="150px">
                    </div>
                    <div>Фермерские продукты поставщика «ООО Фермер» — это сочные фрукты и овощи, пышные булочки из
                        семейных пекарен, жирные сливки из молока домашних коров и ароматные колбасы. Мы сократили путь
                        между производителями и покупателями, чтобы на вашем столе были только самые свежие продукты.
                    </div>

                </div>
            </a>

            <a href="">
                <div class="card" style="padding: 20px; ">
                    <div class="d-flex" style="justify-content: space-between;">
                        <div>
                            <h2>Барашкино </h2>
                            <div class="r">
                                <img src="images/thumbs-up (1).png" alt=""> <span class="rating">+32</span>
                            </div>
                            <p>Деревня Барашково, улица Пушистая, 12</p>
                            <p>Код: 287498723</p>
                            <p>Номер телефона: 8 928 072 23 22</p>

                        </div>
                        <img src="images/sheeps.jpg" alt="" width="150px" height="150px">
                    </div>
                    <div>Уникальное пространство, где человек и животное сосуществуют в гармонии. Погрузитесь в эту
                        атмосферу, чтобы испытать волшебство овечьего мира.
                    </div>

                </div>
            </a>


            {{-- <a href="">
                <div class="card" style="width: 700px;padding: 20px; ">
                    <div class="d-flex" style="justify-content: space-between;">
                        <div>
                            <div class="r">
                                <img src="images/thumbs-up (1).png" alt=""> <span class="rating">+50</span>
                            </div>
                            <h2>Название </h2>

                            <p>Улица Пушкина, дом Колотушкина 69</p>
                            <p>Код: 1234567890</p>
                            <p>Номер телефона: 8 918 703 07 75</p>

                        </div>
                        <img src="images/man.png" alt="" width="150px" height="150px">
                    </div>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae labore recusandae hic
                        architecto
                        cupiditate, impedit cumque quas similique laudantium pariatur dicta nisi nobis accusamus, ut
                        numquam saepe
                        deserunt animi dolorum.</div>

                </div>
            </a> --}}
        </div>
    </main>

    <div class="container">
        <footer class="py-2 bg-light">
            <div class="container">
                <p class="m-0 text-center">© 2023 Название вашего сайта</p>
            </div>
        </footer>
    </div>
</body>

</html>
