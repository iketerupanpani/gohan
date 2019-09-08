@extends('layouts.app')
@section('content')
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用するエラーファイル-->
    @include('common.errors')

    <!-- この下に登録済みタスクリストを表示 -->
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="">
                                <img src="" class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image" />
                            </a>
                            <div class="card-body">
                                <p class="card-text"></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted"> 分鐘</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <tbody id="echo">
            <!--データ出力部分-->
        </tbody>

    </main>
</div>
@endsection