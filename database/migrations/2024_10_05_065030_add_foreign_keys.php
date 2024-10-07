<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->foreign('reported_by')->references('id')->on('users');
        });

        Schema::table('claims', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign(['reported_by']);
        });

        Schema::table('claims', function (Blueprint $table) {
            $table->dropForeign(['item_id']);
            $table->dropForeign(['user_id']);
        });
    }
}