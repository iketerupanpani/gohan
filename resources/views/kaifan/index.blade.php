@extends('layouts.app')
@section('content')
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用するエラーファイル-->
    @include('common.errors')
    @if (count($menu) > 0)

    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach ($menu as $menu)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="/menu/{{$menu->id}}">
                                <img src="" class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image" />
                            </a>
                            <div class="card-body">
                                <p class="card-text">{{ $menu->menu }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">{{ $menu->time }} 分鐘</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    @endif
</div>
@endsection