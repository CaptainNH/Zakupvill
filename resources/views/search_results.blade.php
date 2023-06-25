@extends('layouts.basic')

@section('head')
    <title>Результаты поиска</title>
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
    <h1>Результаты поиска</h1>

    @if ($results->isEmpty())
        <p>Ничего не найдено.</p>
    @else
        @php $count = 0; @endphp
        @foreach ($results as $result)
            @if ($result instanceof \App\Models\Product)
                @if ($count % 3 == 0 || $count == 0)
                    <div class="row" style="margin-bottom: 5%">
                @endif
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($result->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $result->name }}</h5>
                            {{-- <p class="card-text">{{ $product->description }}</p> --}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Склад: {{ $result->warehouse }}</li>
                            <li class="list-group-item">Цена: {{ $result->price }}</li>
                            <li class="list-group-item">Поставщик: {{ $result->getSupplier()->company_name }}</li>
                        </ul>
                        <div class="card-body">
                            <form action="{{ route('basket-add', $result) }}" method="POST">
                                <!-- <a href="#" class="card-link">Another link</a> -->
                                @if ($result->isAvailable())
                                    <button type="submit" class="btn btn-success add-shopping-cart">Добавить в
                                        корзину</button>
                                @else
                                    <button disabled class="btn btn-danger">Товар недоступен
                                    </button>
                                @endif
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                @php $count++; @endphp
                @if ($count % 3 == 0)
                    </div>
                @endif
            @elseif ($result instanceof \App\Models\Supplier)
                <a href="{{ route('products', $result) }}">
                    <div class="card" style="padding: 20px; ">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div>
                                <h2>{{ $result->company_name }} </h2>
                                <div class="r">
                                    <img src="images/thumbs-up (1).png" alt=""> <span
                                        class="rating">{{ $result->rating }}</span>
                                </div>
                                <p>{{ $result->address }}</p>
                                <p>Код: {{ $result->company_code }}</p>
                                <p>Номер телефона: {{ $result->phone_number }}</p>

                            </div>
                            {{-- <img src="images/ferm.jpg" alt="" width="150px" height="150px"> --}}
                        </div>
                        <div>{{ $result->description }}</div>
                    </div>
                </a>
            @endif
        @endforeach
    @endif
@endsection
