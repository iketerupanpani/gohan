@extends('layouts.app')
@section('content')
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用するエラーファイル-->
    @include('common.errors')

    <div id="echo">
        <!--データ出力部分-->
    </div>

</div>
@endsection