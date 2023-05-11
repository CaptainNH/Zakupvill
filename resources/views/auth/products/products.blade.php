@extends('layouts.app')

@section('head')
    <title>Мои товары</title>
    {{-- <style>
        tr:hover {
            background-color: #fbbb3b;
        }

        /* Стили для основного контейнера модального окна */
        .modal-container {
            display: none;
            /* Скрываем модальное окно по умолчанию */
            position: fixed;
            /* Окно должно оставаться на месте, даже если страница прокручивается */
            z-index: 1;
            /* Окно должно находиться поверх других элементов на странице */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Черный полупрозрачный фон */
        }

        /* Стили для контента модального окна */
        .modal-content {
            background-color: #fff;
            /* Белый фон контента */
            margin: 2% auto;
            /* Отступ сверху и снизу, выравнивание по центру горизонтально */
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            /* Ширина контента */
        }

        /* Стили для элемента закрытия модального окна */
        .close {
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
    </style> --}}
@endsection
@section('content')
    <div class="container">
        <a style="margin-bottom: 15px" class="btn btn-success" type="button" href="{{ route('products.create') }}">Добавить
            товар</a>
        @php $count = 0; @endphp
        @foreach ($products as $product)
            @if ($count % 3 == 0 || $count == 0)
                <div class="row" style="margin-bottom: 5%">
            @endif
            @include('auth.products.productCard', compact('product'))
            @php $count++; @endphp
            @if ($count % 3 == 0)
    </div>
    @endif
    @endforeach
    </div>
@endsection
