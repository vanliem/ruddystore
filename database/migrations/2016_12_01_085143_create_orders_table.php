<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->integer('payment_id')->unsigned();
            $table->integer('ward_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->text('address_detail');
            $table->boolean('ship')->default(true);
            $table->text('note');
            $table->decimal('total_price', 10, 0);
            $table->boolean('status_order')->default(false);
            $table->datetime('delivery date');
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
        Schema::drop('orders');
    }
}
