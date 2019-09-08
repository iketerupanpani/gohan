<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->text('menu');
            $table->string('pic')->nullable();
            $table->text('category')->nullable();
            $table->text('time')->nullable();
            $table->text('people')->nullable();
            $table->text('ingredient1');
            $table->text('ingredient2')->nullable();
            $table->text('ingredient3')->nullable();
            $table->text('ingredient4')->nullable();
            $table->text('ing_amount1');
            $table->text('ing_amount2')->nullable();
            $table->text('ing_amount3')->nullable();
            $table->text('ing_amount4')->nullable();
            $table->text('seasoning1')->nullable();
            $table->text('seasoning2')->nullable();
            $table->text('seasoning3')->nullable();
            $table->text('seasoning4')->nullable();
            $table->text('sea_amount1')->nullable();
            $table->text('sea_amount2')->nullable();
            $table->text('sea_amount3')->nullable();
            $table->text('sea_amount4')->nullable();
            $table->text('receipt1');
            $table->text('receipt2')->nullable();
            $table->text('receipt3')->nullable();
            $table->text('receipt4')->nullable();
            $table->text('receipt5')->nullable();
            $table->text('receipt6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
