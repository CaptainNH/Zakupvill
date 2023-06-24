@extends('layouts.basic')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Поставщики</title>
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
@endsection

@section('content')
    <div class="container" style="height: 100vh;">

        @foreach ($suppliers as $supplier)
            <a href="{{ route('products', $supplier) }}">
                <div class="card" style="padding: 20px; ">
                    <div class="d-flex" style="justify-content: space-between;">
                        <div>
                            <h2>{{ $supplier->company_name }} </h2>
                            <div class="r">
                                <img src="images/thumbs-up (1).png" alt=""> <span
                                    class="rating">{{ $supplier->rating }}</span>
                            </div>
                            <p>{{ $supplier->address }}</p>
                            <p>Код: {{ $supplier->company_code }}</p>
                            <p>Номер телефона: {{ $supplier->phone_number }}</p>

                        </div>
                        {{-- <img src="images/ferm.jpg" alt="" width="150px" height="150px"> --}}
                    </div>
                    <div>{{ $supplier->description }}</div>

                </div>
            </a>
        @endforeach

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
@endsection
