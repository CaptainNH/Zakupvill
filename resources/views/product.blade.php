@extends('basic')
@section('content')
    <div>Название</div>
    <p><img src=""></p>
    <div>Цена </div>
    <div>
        <textarea>Описание</textarea>
    </div>
    <div>
        <div>
            <form action="#" method="get">
                <div>
                    <input type="submit" value="Изменить">
                </div>

            </form>
        </div>
        <div>
            <form action="#" method="post">
                @csrf
                @method('delete')
                <div>
                    <input type="submit" value="Удалить">
                </div>

            </form>
        </div>
    </div>
@endsection
