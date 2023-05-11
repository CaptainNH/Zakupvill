@extends('layouts.basic')

@section('head')
    <title>Товары</title>
@endsection

@section('content')
    @php $count = 0; @endphp
    @foreach ($products as $product)
        @if ($count % 3 == 0 || $count == 0)
            <div class="row" style="margin-bottom: 5%">
        @endif
        @include('layouts.card', compact('product'))
        @php $count++; @endphp
        @if ($count % 3 == 0)
            </div>
        @endif
    @endforeach
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script>
        // let btns = document.querySelectorAll(".add-shopping-cart");
        // btns.forEach(button => {
        //     button.addEventListener('click', () => {
        //         if (button.classList.contains("btn-primary")) {
        //             button.textContent = "Добавлено";
        //             button.classList.add("btn-outline-success");
        //             button.classList.remove("btn-primary");
        //             button.setAttribute("disabled", true);
        //         } else {
        //             button.textContent = "Добавить в корзину";
        //             button.classList.replace("btn-outline-success", "btn-primary");
        //         }

        //     });
        // });
    </script>
@endsection
