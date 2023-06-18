@extends('layouts.app')
@section('head')
    <title>Мои товары</title>
    <style>
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
    </style>
@endsection
@section('content')
    <div class="container" style="height: 100vh;">
        <h1 style="text-align: center;">Заказ</h1>
        <span style="font-size: 20px;">Статус заказа</span>

        <form action="{{ route('change-order-status', $order) }}" method="POST">
            @csrf
            <input type="radio" class="btn-check" name="options" id="option1" value="1"
                {{ $order->status === 1 ? 'checked' : '' }} autocomplete="off">
            <label class="btn btn-secondary" for="option1">Создан</label>
            <input type="radio" class="btn-check" name="options" id="option2" value="2"
                {{ $order->status === 2 ? 'checked' : '' }} autocomplete="off">
            <label class="btn btn-secondary" for="option2">В сборке</label>
            <input type="radio" class="btn-check" name="options" id="option4" value="3"
                {{ $order->status === 3 ? 'checked' : '' }} autocomplete="off">
            <label class="btn btn-secondary" for="option4">В пути</label>
            <input type="radio" class="btn-check" name="options" id="option5" value="4"
                {{ $order->status === 4 ? 'checked' : '' }} autocomplete="off">
            <label class="btn btn-secondary" for="option5">Доставлен</label>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>


        <ul>
            <li>
                Контактное лицо: {{ $order->contact_name }}
            </li>
            <li>
                Номер телефона: {{ $order->phone_number }}
            </li>
            <li>
                Адрес: {{ $order->address }}
            </li>
            <li>
                Сумма: {{ $order->calcFullPrice() }}
            </li>
        </ul>
        <table class="table">
            <thead>
                <tr>
                    <th>Номер</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Сумма</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr data-href="{{ route('product-show', $product->id) }}">
                        <td style="vertical-align: middle;">{{ $product->id }}</td>
                        <td style="vertical-align: middle;">{{ $product->name }}</td>
                        <td style="vertical-align: middle;">{{ $product->price }}</td>
                        <td style="vertical-align: middle;">{{ $product->pivot->count }}</td>
                        <td style="vertical-align: middle;">{{ $product->calcPrice() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        // Получаем ссылки на элементы
        var modalContainer = document.querySelector('.modal-container');
        var closeButton = document.querySelector('.close');
        var table_rows = document.querySelectorAll('tr');
        // Функция для открытия модального окна
        function openModal($href) {
            window.location.href = $href;
            modalContainer.style.display = 'block';
        }

        // Функция для закрытия модального окна
        function closeModal() {
            modalContainer.style.display = 'none';
        }

        // Обработчик события для кнопки закрытия модального окна
        closeButton.addEventListener('click', closeModal);

        // Обработчик события для модального окна
        modalContainer.addEventListener('click', function(event) {
            if (event.target === modalContainer) {
                closeModal();
            }
        });

        // Обработчик события для открытия модального окна (при клике на кнопку)
        table_rows.forEach(row => {
            row.addEventListener('click', function() {
                var href = $(this).attr('data-href');

                window.location.href = href;
            });
        })
    </script>
@endsection
