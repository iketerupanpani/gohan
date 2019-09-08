@extends('layouts.app')
@section('content')
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用するエラーファイル-->
    @include('common.errors')

    <!-- この下に登録済みタスクリストを表示 -->
    <div class="float-right">
        <form action="" accept-charset="UTF-8" method="GET">
            <input type="text" name="keyword" id="keyword" placeholder="食譜名・食材名" />
            <input type="submit" value="搜索" class="submit button small" />
        </form>
    </div>
    <main role="main">

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">食譜名</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">食譜名</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">食譜名</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">食譜名</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">食譜名</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">食譜名</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">食譜名</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">食譜名</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" aria-label="Placeholder: image">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text">食譜名</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</div>
@endsection