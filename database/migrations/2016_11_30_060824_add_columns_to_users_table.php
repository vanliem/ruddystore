<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'full_name');
            $table->boolean('gender')->default(false)->after('email');
            $table->dateTime('birthday')->nullable()->after('gender');

            $table->string('avatar', 255)->nullable()->after('birthday');
            $table->string('mobile', 11)->nullable()->after('avatar');
            $table->string('address_detail', 512)->nullable()->after('mobile');
            $table->string('street', 512)->nullable()->after('address_detail');

            $table->integer('ward_id')->unsigned()->nullable()->after('street');
            $table->integer('city_id')->nullable()->after('ward_id');
            $table->integer('facebook_id')->nullable()->after('city_id');
            $table->integer('role_id')->default(1)->after('facebook_id');

            $table->boolean('activated')->default(false)->after('role_id');
            $table->string('active_code', 64)->nullable()->after('activated');
            $table->string('forgot_code', 64)->nullable()->after('active_code');
            $table->dateTime('activated_date')->nullable()->after('forgot_code');
            $table->dateTime('deleted_at')->nullable()->after('updated_at');
            $table->dateTime('last_login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
            $table->dropColumn('activated_date');
            $table->dropColumn('forgot_code');
            $table->dropColumn('active_code');
            $table->dropColumn('activated');
            $table->dropColumn('role_id');
            $table->dropColumn('facebook_id');
            $table->dropColumn('city_id');
            $table->dropColumn('ward_id');
            $table->dropColumn('ward_id');
            $table->dropColumn('street');
            $table->dropColumn('address_detail');
            $table->dropColumn('mobile');
            $table->dropColumn('avatar');
            $table->dropColumn('birthday');
            $table->dropColumn('gender');
            $table->renameColumn('full_name', 'name');
        });
    }
}
