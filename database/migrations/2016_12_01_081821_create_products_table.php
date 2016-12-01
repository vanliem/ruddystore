<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_category_id')->unsigned();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->text('short_description');
            $table->longText('description');
            $table->decimal('price', 10, 2);
            $table->integer('gallery_id')->unsigned()->nullable();
            $table->boolean('allow_display')->default(false);
            $table->datetime('delete_at');
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
        Schema::drop('products');
    }
}
