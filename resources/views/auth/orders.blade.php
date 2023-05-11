@extends('layouts.app')

@section('head')
    <title>Заказы</title>
    <style>
        tr:hover {
            background-color: #fbbb3b;
        }
    </style>
@endsection
@section('content')
    <div class="container" style=" height: 100vh;">
        <h1 style="text-align: center;">Заказы</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Номер</th>
                    <th>Статус</th>
                    <th>Контактное лицо</th>
                    <th>Номер телефона</th>
                    <th>Адрес</th>
                    <th>Сумма</th>
                    <th>Время создания</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr onclick="document.location='{{ route('order', $order->id) }}'">
                        <td style="vertical-align: middle;">{{ $order->id }}</td>
                        <td style="vertical-align: middle;">
                            @if ($order->status == 1)
                                Создан
                            @endif
                            @if ($order->status == 2)
                                В сборке
                            @endif
                            @if ($order->status == 3)
                                В пути
                            @endif
                            @if ($order->status == 4)
                                Доставлен
                            @endif
                        </td>
                        <td style="vertical-align: middle;">{{ $order->contact_name }}</td>
                        <td style="vertical-align: middle;">{{ $order->phone_number }}</td>
                        <td style="vertical-align: middle;">{{ $order->address }}</td>
                        <td style="vertical-align: middle;">{{ $order->calcFullPrice() }}</td>
                        <td style="vertical-align: middle;">{{ $order->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
