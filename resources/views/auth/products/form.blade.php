@extends('layouts.app')

@isset($product)
    @section('head')
        <title>{{ 'Редактировать товар ' . $product->name }}</title>
    @endsection
@else
    @section('head')
        <title>Создать товар</title>
    @endsection
@endisset

@section('content')
    <div class="container">
        <div class="col-md-12">
            @isset($product)
                <h1>Редактировать товар <b>{{ $product->name }}</b></h1>
            @else
                <h1>Добавить товар</h1>
            @endisset
            <form method="POST" enctype="multipart/form-data"
                @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset>
                <div>
                    @isset($product)
                        @method('patch')
                    @endisset
                    @csrf
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">Название: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="name" id="name"
                                value="@isset($product){{ $product->name }}@endisset" required>
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="warehouse" class="col-sm-2 col-form-label">Склад: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="warehouse" id="warehouse"
                                value="@isset($product){{ $product->warehouse }}@endisset">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="price" id="price"
                                value="@isset($product){{ $product->price }}@endisset" required>
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="price" class="col-sm-2 col-form-label">Кол-во: </label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="count" id="count"
                                value="@isset($product){{ $product->count }}@endisset" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2" for="image">Картинка:</label>
                        <div class="col-sm-10" style="width: 500px;">
                            <input class="form-control" type="file" name="image" placeholder="Картинка"
                                accept=".png,.jpeg,.jpg,.webp" @if (!@isset($product)) required @endif>
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                        <div class="col-sm-6">
                            <textarea name="description" id="description" cols="72" rows="7">
@isset($product)
{{ $product->description }}
@endisset
</textarea>
                        </div>
                    </div>
                    <button class="btn btn-success">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
