@extends('layouts.basic')

@section('head')
    <title>Корзина</title>
    <style>
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
            margin: 15% auto;
            /* Отступ сверху и снизу, выравнивание по центру горизонтально */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
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
        <h1 style="text-align: center;">Корзина</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Наименование товара</th>
                    <th>Количество</th>
                    <th>Цена за единицу</th>
                    <th>Сумма</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->products as $product)
                    <tr>
                        <td style="vertical-align: middle;">{{ $product->name }}</td>
                        <td style="vertical-align: middle;">
                            <div class="btn-group form-inline">
                                <form action="{{ route('basket-remove', $product) }}" method="POST">
                                    <button class="btn btn-outline-secondary" href="#"
                                        style="margin-right:20px; padding-top: 10px;">
                                        <span class="material-icons material-icons-outlined">
                                            remove
                                        </span>
                                    </button>
                                    @csrf
                                </form>
                                <span>{{ $product->pivot->count }}</span>
                                <form action="{{ route('basket-add', $product) }}" method="POST">
                                    <button type="submit" class="btn btn-outline-secondary" href="#"
                                        style="margin-left: 20px; padding-top: 10px;">
                                        <span class="material-icons material-icons-outlined">
                                            add
                                        </span>
                                    </button>
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td style="vertical-align: middle;">
                            <div class="">{{ $product->price }}</div>
                        </td>
                        <td style="vertical-align: middle;">{{ $product->calcPrice() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row center" style="display: flex; justify-content: center; ">
            <div class="col-md-6" style="justify-content: center; border: 1px solid black;">
                <p style="text-align: center; margin-bottom: 30px;">Итого: {{ $order->calcFullPrice() }}</p>
                <div style="display: flex; justify-content: space-around; padding: 15px;">
                    <a href="{{ route('products') }}" class="btn btn-secondary">Продолжить покупки</a>
                    <a href="#" class="btn btn-success open-modal">Оформить заказ</a>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('modal')
    <div class="modal-container">
        <div class="modal-content">
            <span class="close" style="text-align: right;">&times;</span>
            <h2>Оформление заказа</h2>
            <p>Заполните данные:</p>
            <form action="{{ route('basket-confirm') }}" method="POST">
                <div class="form-group">
                    <label for="title">Название организации:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Введите название">
                </div>
                <div class="form-group">
                    <label for="name">Контактное лицо:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя">
                </div>
                <div class="form-group">
                    <label for="phone">Номер телефона:</label>
                    <div class="input-group">
                        <!-- <div class="input-group-prepend">
                                                                                                                                                                                                                                                            <span class="input-group-text">+7</span>
                                                                                                                                                                                                                                                          </div> -->
                        <input type="tel" class="form-control" id="phone" name="phone"
                            placeholder="+7 (123) 456-78-90" pattern="+7 ([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}" required>
                    </div>
                    <!-- <small class="form-text text-muted">Пример: 123-456-7890</small> -->
                </div>
                <div class="form-group">
                    <label for="address">Адрес:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Введите адрес">
                </div>

                <!-- <div class="form-group">
                                                                                                                                                                                                                                                      <label for="message">Адрес:</label>
                                                                                                                                                                                                                                                      <textarea class="form-control" id="message" name="message" placeholder="Введите сообщение"></textarea>
                                                                                                                                                                                                                                                    </div> -->
                <button style="margin-top: 5px" type="submit" class="btn btn-success">Отправить</button>
                @csrf
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Получаем ссылки на элементы
        var modalContainer = document.querySelector('.modal-container');
        var closeButton = document.querySelector('.close');
        var openButton = document.querySelector('.open-modal');
        // Функция для открытия модального окна
        function openModal() {
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
        openButton.addEventListener('click', openModal);
    </script>
@endsection





<!-- <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Продолжить покупки</a>
            </div>
            <div class="col-md-6 text-right">
                <p>Итого: $60</p>
                <a href="#" class="btn btn-success">Оформить заказ</a>
            </div>
        </div> -->
