<div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url($product->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Склад: {{ $product->warehouse }}</li>
            <li class="list-group-item">Цена: {{ $product->price }}</li>
            <li class="list-group-item">Кол-во: {{ $product->count }}</li>
        </ul>
        <div class="card-body">
            <div style="display:flex; justify-content: space-around" class="btn-group form-inline">
                <form enctype="multipart/form-data" action="{{ route('products.edit', $product) }}">
                    @csrf
                    <input class="btn btn-success" type="submit" value="Изменить">
                </form>
                <form enctype="multipart/form-data" action="{{ route('products.destroy', $product) }}" method="POST">
                    <!-- <a href="#" class="card-link">Another link</a> -->
                    {{-- <a href="{{ route('products.edit', $product) }}" class="btn btn-success add-shopping-cart">Изменить</a> --}}
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Удалить">
                </form>

            </div>
        </div>
    </div>
</div>
