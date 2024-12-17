<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToProductsTable extends Migration
{
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->after('id'); // ここでuser_idを追加
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('user_id');
    });
}
}