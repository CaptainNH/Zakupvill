<div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url($product->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            {{-- <p class="card-text">{{ $product->description }}</p> --}}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Склад: {{ $product->warehouse }}</li>
            <li class="list-group-item">Цена: {{ $product->price }}</li>
            <li class="list-group-item">Поставщик: {{ $product->getSupplier()->company_name }}</li>
        </ul>
        <div class="card-body">
            <form action="{{ route('basket-add', $product) }}" method="POST">
                <!-- <a href="#" class="card-link">Another link</a> -->
                @if ($product->isAvailable())
                    <button type="submit" class="btn btn-success add-shopping-cart">Добавить в корзину</button>
                @else
                    <div class="btn btn-danger">Товар закончился</div>
                @endif
                @csrf
            </form>
        </div>
    </div>
</div>
