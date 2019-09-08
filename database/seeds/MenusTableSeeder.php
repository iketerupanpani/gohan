<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'menu' => 'ホットケーキ',
                'category' => '早餐',
                'time' => '20',
                'people' => '2',
                'ingredient1' => 'ホットケーキミックス',
                'ingredient2' => '卵',
                'ing_amount1' => '150g',
                'ing_amount2' => '1個',
                'seasoning1' => '砂糖',
                'sea_amount1' => '100g',
                'receipt1' => 'ホットケーキミックスに卵を入れる'

            ],
            [
                'menu' => 'ピザ',
                'category' => '主菜',
                'time' => '30',
                'people' => '2',
                'ingredient1' => '小麦粉',
                'ingredient2' => '卵',
                'ing_amount1' => '150g',
                'ing_amount2' => '1個',
                'seasoning1' => '塩',
                'sea_amount1' => 'ひとつまみ',
                'receipt1' => '小麦粉を濾す'
            ],
            [
                'menu' => 'ハッシュポテト',
                'category' => '副菜',
                'time' => '30',
                'people' => '2',
                'ingredient1' => 'メークイン（ジャガイモ）',
                'ingredient2' => '生クリーム',
                'ing_amount1' => '200g',
                'ing_amount2' => '50ml',
                'seasoning1' => '塩',
                'sea_amount1' => '1スプーン',
                'receipt1' => 'メークインを蒸す'
            ],
        ]);
    }
}
