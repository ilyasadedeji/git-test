<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('items')) {
            Schema::create('items', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description');
                $table->enum('status', ['lost', 'found', 'returned']);
                $table->date('date_reported');
                $table->string('location');
                $table->foreignId('reported_by')->constrained('users');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}