<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table){
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::table('user_comment_product_associations', function($table){
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('user_wishlists', function($table){
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('products', function($table){
            $table->foreign('product_category_id')->references('id')->on('product_categories');
            $table->foreign('gallery_id')->references('id')->on('galleries');
        });

        Schema::table('product_images', function($table){
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('product_promotions', function($table){
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('product_categories', function($table){
            $table->foreign('parent_id')->references('id')->on('product_categories');
        });

        Schema::table('orders', function($table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('customer_id')->references('id')->on('visitors');
        });

        Schema::table('order_details', function($table){
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('dimensions_id')->references('id')->on('dimensions');
        });

        Schema::table('product_tag_associations', function($table){
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('product_tag_id')->references('id')->on('product_tags');
        });

        Schema::table('product_pattern_associations', function($table){
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('pattern_id')->references('id')->on('patterns');
        });

        Schema::table('product_dimension_associations', function($table){
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('dimension_id')->references('id')->on('dimensions');
        });

        Schema::table('articles', function($table){
            $table->foreign('article_category_id')->references('id')->on('article_categories');
        });

        Schema::table('article_tag_associations', function($table){
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('article_tag_id')->references('id')->on('article_tags');
        });

        Schema::table('visitors', function($table){
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('ward_id')->references('id')->on('wards');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table){
            $table->dropForeign('users_ward_id_foreign');
            $table->dropForeign('users_city_id_foreign');
            $table->dropForeign('users_role_id_foreign');
        });

        Schema::table('user_comment_product_associations', function($table){
            $table->dropForeign('products_product_id_foreign');
            $table->dropForeign('products_user_id_foreign');
        });

        Schema::table('user_wishlists', function($table){
            $table->dropForeign('products_product_id_foreign');
            $table->dropForeign('products_user_id_foreign');
        });

        Schema::table('products', function($table){
            $table->dropForeign('product_categories_product_category_id_foreign');
            $table->dropForeign('galleries_gallery_id_foreign');
        });

        Schema::table('product_images', function($table){
            $table->dropForeign('products_product_id_foreign');
        });

        Schema::table('product_promotions', function($table){
            $table->dropForeign('products_product_id_foreign');
        });

        Schema::table('product_categories', function($table){
            $table->dropForeign('product_categories_parent_id_foreign');
        });

        /*Schema::table('orders', function($table){
            $table->dropForeign('users_user_id_foreign');
            $table->dropForeign('user_id')->references('id')->on('users');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('customer_id')->references('id')->on('visitors');
        });

        Schema::table('order_details', function($table){
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('dimensions_id')->references('id')->on('dimensions');
        });

        Schema::table('product_tag_associations', function($table){
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('product_tag_id')->references('id')->on('product_tags');
        });

        Schema::table('product_pattern_associations', function($table){
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('pattern_id')->references('id')->on('patterns');
        });

        Schema::table('product_dimension_associations', function($table){
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('dimension_id')->references('id')->on('dimensions');
        });

        Schema::table('articles', function($table){
            $table->foreign('article_category_id')->references('id')->on('article_categories');
        });

        Schema::table('article_tag_associations', function($table){
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('article_tag_id')->references('id')->on('article_tags');
        });

        Schema::table('visitors', function($table){
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('ward_id')->references('id')->on('wards');
        });*/
    }
}
