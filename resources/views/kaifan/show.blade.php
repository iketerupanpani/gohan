@extends('layouts.app')
@section('content')

<h4>{{$menu->menu}}</h4>
<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <a href="/menu/{{$menu->id}}">
                    <img src="" class="bd-placeholder-img card-img-top" aria-label="Placeholder: image" />
                </a>
            </div>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <p>分類：{{$menu->category}}</p>
        <p>烹飪時間：{{$menu->time}}分</p>
        <p>{{$menu->people}}人份</p>
        <p>{{$menu->ingredient1}}{{$menu->ing_amount1}}</p>
        <p>{{$menu->ingredient2}}{{$menu->ing_amount2}}</p>
        <p>{{$menu->ing_amount3}}{{$menu->ingredient3}}</p>
        <p>{{$menu->ing_amount4}}{{$menu->ingredient4}}</p>
        <p>{{$menu->seasoning1}}{{$menu->sea_amount1}}</p>
        <p>{{$menu->seasoning2}}{{$menu->sea_amount2}}</p>
        <p>{{$menu->seasoning3}}{{$menu->sea_amount3}}</p>
        <p>{{$menu->seasoning4}}{{$menu->sea_amount4}}</p>
        <p>{{$menu->receipt1}}</p>
        <p>{{$menu->receipt2}}</p>
        <p>{{$menu->receipt3}}</p>
        <p>{{$menu->receipt4}}</p>
        <p>{{$menu->receipt5}}</p>
        <p>{{$menu->receipt6}}</p>
    </div>
</main>

<hr class="mb-4">
{{ csrf_field() }}
<a href="/menu/{{$menu->id}}/edit">
    <button class="btn btn-success" type="submit">編輯</button>
</a>

<form action="/menu/{{$menu->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
    <input class="btn btn-success" type="submit" name="" value="刪除">
</form>
@endsection