<div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img src="https://via.placeholder.com/300x200.png?text=Product+Image" class="card-img-top" alt="...">
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
                <button type="submit" class="btn btn-primary add-shopping-cart">Добавить в корзину</button>
                @csrf
            </form>
        </div>
    </div>
</div>
