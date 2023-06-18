@extends('layouts.basic')

@section('head')
    <title>О нас</title>
@endsection

@section('content')
    <style>
        .about .img-wrapper {
            width: 200px;
            height: 150px;
            margin: 10px;
        }

        .about div {
            display: flex;
            justify-content: center;
        }
    </style>
    <section class="about">
        <h2 class="text-center">Наши Клиенты</h2>
        <div>
            <div class="img-wrapper">
                <img src="images/clients1.png" alt="">
            </div>
            <div class="img-wrapper">
                <img src="images/clients2.png" alt="">
            </div>
            <div class="img-wrapper">
                <img src="images/clients3.jpg" alt="">
            </div>
            <div class="img-wrapper">
                <img src="images/clients4.png" alt="">
            </div>
        </div>
        <div>
            <div class="img-wrapper">
                <img src="images/clients5.png" alt="">
            </div>
            <div class="img-wrapper">
                <img src="images/clients6.png" alt="">
            </div>
            <div class="img-wrapper">
                <img src="images/clients7.png" alt="">
            </div>
        </div>
    </section>
@endsection
