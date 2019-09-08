@extends('layouts.app')
@section('content')
<form action="/menu/{{$menu->id}}" method="post">
    {{ csrf_field() }}
    <!-- 食譜名 -->
    <div class="row">
        <div class="col-md-12 ">
            <label for="menu">食譜名</label>
            <input type="text" class="form-control" name="menu" id="menu" value="{{$menu->menu}}">
        </div>
    </div>
    <br>
    <!-- 画像 -->
    <div class="row">
        <div class="col-md-12 ">
            <label for="photo">照片</label><br>
            <input type="file" name="pic" id="pic" accept="image/*" capture="camera">
            <small class="input_condidion">*jpg,png形式のみ</small></br>
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
        </div>
    </div>
    <br>
    <!-- シーン -->
    <div class="row">
        <label for="category" class="col-sm-3 control-label">分類</label>
        <select class="custom-select d-block col-md-2" id="category" name="category">
            <option name="category" id="category" value="{{$menu->category}}">{{$menu->category}}</option>
            <option name="category" id="category" value="主菜">主菜</option>
            <option name="category" id="category" value="副菜">副菜</option>
            <option name="category" id="category" value="前菜">前菜</option>
            <option name="category" id="category" value="早餐">早餐</option>
            <option name="category" id="category" value="甜點">甜點</option>
            <option name="category" id="category" value="飲料">飲料</option>
            <option name="category" id="category" value="懶人餐">懶人餐</option>
            <option name="category" id="category" value="其他">其他</option>
        </select>
    </div>
    <br>
    <!-- 烹飪時間 -->
    <div class="row">
        <label for="cooking_time" class="col-sm-3 control-label">烹飪時間</label>
        <input type="text" class="d-block col-md-2" name="time" id="time" placeholder="minutes..." value="{{$menu->time}}" required>
    </div>
    <hr class="mb-4">
    <!-- 幾人份 -->
    <div class="row">
        <label for="people" class="col-sm-3 control-label">幾人份</label>
        <input type="text" class="d-block col-md-2" name="people" id="people" placeholder="人份" value="{{$menu->people}}">
    </div>
    <hr class="mb-4">
    <!-- 食材 -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="ingredient1">食材1</label>
            <input type="text" class="form-control" name="ingredient1" id="ingredient1" value="{{$menu->ingredient1}}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="ing_amount1">分量</label>
            <input type="text" class="form-control" name="ing_amount1" id="ing_amount1" placeholder="g/ml" value="{{$menu->ing_amount1}}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="ingredient2">食材2</label>
            <input type="text" class="form-control" name="ingredient2" id="ingredient2" value="{{$menu->ingredient2}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="ing_amount2">分量2</label>
            <input type="text" class="form-control" name="ing_amount2" id="ing_amount2" placeholder="g/ml" value="{{$menu->ing_amount2}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="ingredient3">食材3</label>
            <input type="text" class="form-control" name="ingredient3" id="ingredient3" value="{{$menu->ingredient3}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="ing_amount3">分量3</label>
            <input type="text" class="form-control" name="ing_amount3" id="ing_amount3" placeholder="g/ml" value="{{$menu->ing_amount3}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="ingredient4">食材4</label>
            <input type="text" class="form-control" name="ingredient4" id="ingredient4" value="{{$menu->ingredient4}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="ing_amount4">分量4</label>
            <input type="text" class="form-control" name="ing_amount4" id="ing_amount4" placeholder="g/ml" value="{{$menu->ing_amount4}}">
        </div>

    </div>
    <br>
    <hr class="mb-4">
    <!-- 調味料 -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="seasoning1">調味料1</label>
            <input type="text" class="form-control" id="seasoning1" name="seasoning1" value="{{$menu->seasoning1}}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="sea_amount1">分量</label>
            <input type="text" class="form-control" id="sea_amount1" name="sea_amount1" placeholder="g/ml" value="{{$menu->sea_amount1}}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="seasoning2">調味料2</label>
            <input type="text" class="form-control" id="seasoning2" name="seasoning2" value="{{$menu->seasoning2}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="sea_amount2">分量</label>
            <input type="text" class="form-control" id="sea_amount2" name="sea_amount2" placeholder="g/ml" value="{{$menu->sea_amount2}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="seasoning3">調味料3</label>
            <input type="text" class="form-control" id="seasoning3" name="seasoning3" value="{{$menu->seasoning3}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="sea_amount3">分量</label>
            <input type="text" class="form-control" id="sea_amount3" name="sea_amount3" placeholder="g/ml" value="{{$menu->sea_amount3}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="seasoning4">調味料4</label>
            <input type="text" class="form-control" id="seasoning4" name="seasoning4" value="{{$menu->seasoning4}}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="sea_amount4">分量</label>
            <input type="text" class="form-control" id="sea_amount4" name="sea_amount4" placeholder="g/ml" value="{{$menu->sea_amount4}}">
        </div>
    </div>
    <hr class="mb-4">
    <!-- 做法 -->
    <div class="row">
        <div class="col-md-12 ">
            <label for="receipt1">做法1</label>
            <input type="text" class="form-control" name="receipt1" id="receipt1" value="{{$menu->receipt1}}" required>
        </div>
        <div class="col-md-12 ">
            <label for="receipt2">做法2</label>
            <input type="text" class="form-control" name="receipt2" id="receipt2" value="{{$menu->receipt2}}">
        </div>
        <div class="col-md-12 ">
            <label for="receipt3">做法3</label>
            <input type="text" class="form-control" name="receipt3" id="receipt3" value="{{$menu->receipt3}}">
        </div>
        <div class="col-md-12 ">
            <label for="receipt4">做法4</label>
            <input type="text" class="form-control" name="receipt4" id="receipt4" value="{{$menu->receipt4}}">
        </div>
        <div class="col-md-12 ">
            <label for="receipt5">做法5</label>
            <input type="text" class="form-control" name="receipt5" id="receipt5" value="{{$menu->receipt5}}">
        </div>
        <div class="col-md-12 ">
            <label for="receipt6">做法6</label>
            <input type="text" class="form-control" name="receipt6" id="receipt6" value="{{$menu->receipt6}}">
        </div>
    </div>
    <div>
        <input type="hidden" name="_method" value="patch">
        <input type="submit" value="更新">
    </div>
</form>
@endsection