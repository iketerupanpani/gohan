<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Validator;
use Auth;
// use Illuminate\Validation\ValidationException;

class MenusController extends Controller
{
    //クラスが呼ばれたら最初に実行する処理
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::where('user_id', Auth::user()->id)
            ->get();
        return view('kaifan.index', ['menu' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kaifan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'menu' => 'required|max:255',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        // モデルからインスタンスを生成
        $menu = new Menu;
        $menu->user_id = Auth::user()->id;
        $menu->menu = $request->menu;
        $menu->pic = $request->pic;
        $menu->category = $request->category;
        $menu->time = $request->time;
        $menu->people = $request->people;
        $menu->ingredient1 = $request->ingredient1;
        $menu->ingredient2 = $request->ingredient2;
        $menu->ingredient3 = $request->ingredient3;
        $menu->ingredient4 = $request->ingredient4;
        $menu->ing_amount1 = $request->ing_amount1;
        $menu->ing_amount2 = $request->ing_amount2;
        $menu->ing_amount3 = $request->ing_amount3;
        $menu->ing_amount4 = $request->ing_amount4;
        $menu->seasoning1 = $request->seasoning1;
        $menu->seasoning2 = $request->seasoning2;
        $menu->seasoning3 = $request->seasoning3;
        $menu->seasoning4 = $request->seasoning4;
        $menu->sea_amount1 = $request->sea_amount1;
        $menu->sea_amount2 = $request->sea_amount2;
        $menu->sea_amount3 = $request->sea_amount3;
        $menu->sea_amount4 = $request->sea_amount4;
        $menu->receipt1 = $request->receipt1;
        $menu->receipt2 = $request->receipt2;
        $menu->receipt3 = $request->receipt3;
        $menu->receipt4 = $request->receipt4;
        $menu->receipt5 = $request->receipt5;
        $menu->receipt6 = $request->receipt6;
        // 保存
        $menu->save();
        // 保存後 一覧ページへリダイレクト
        return redirect('/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 引数で受け取った$idを元にfindでレコードを取得
        $menu = Menu::find($id);
        // viewにデータを渡す
        return view('kaifan.show', ['menu' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($menu_id)
    {
        $menu = Menu::where('user_id', Auth::user()->id)
            ->find($menu_id);
        return view('kaifan.edit', ['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'menu' => 'required|max:255',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        // $menu = new \stdClass;
        $menu = Menu::find($id);
        $menu->menu = $request->menu;
        $menu->pic = $request->pic;
        $menu->category = $request->category;
        $menu->time = $request->time;
        $menu->people = $request->people;
        $menu->ingredient1 = $request->ingredient1;
        $menu->ingredient2 = $request->ingredient2;
        $menu->ingredient3 = $request->ingredient3;
        $menu->ingredient4 = $request->ingredient4;
        $menu->ing_amount1 = $request->ing_amount1;
        $menu->ing_amount2 = $request->ing_amount2;
        $menu->ing_amount3 = $request->ing_amount3;
        $menu->ing_amount4 = $request->ing_amount4;
        $menu->seasoning1 = $request->seasoning1;
        $menu->seasoning2 = $request->seasoning2;
        $menu->seasoning3 = $request->seasoning3;
        $menu->seasoning4 = $request->seasoning4;
        $menu->sea_amount1 = $request->sea_amount1;
        $menu->sea_amount2 = $request->sea_amount2;
        $menu->sea_amount3 = $request->sea_amount3;
        $menu->sea_amount4 = $request->sea_amount4;
        $menu->receipt1 = $request->receipt1;
        $menu->receipt2 = $request->receipt2;
        $menu->receipt3 = $request->receipt3;
        $menu->receipt4 = $request->receipt4;
        $menu->receipt5 = $request->receipt5;
        $menu->receipt6 = $request->receipt6;
        // 保存
        $menu->save();
        // 詳細ページへリダイレクト
        return redirect('/menu/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // idを元にレコードを検索
        $menu = Menu::find($id);
        // 削除
        $menu->delete();
        // 一覧にリダイレクト
        return redirect('/menu');
    }
    //api画面表示用関数
    public function api_ajax()
    {
        return view('kaifan.api_ajax');
    }
}
