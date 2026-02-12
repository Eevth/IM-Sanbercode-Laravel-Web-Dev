<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('product_id');
        $table->enum('type', ['in', 'out']);
        $table->integer('amount');
        $table->text('notes')->nullable();
        $table->timestamps();

        $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');

        $table->foreign('product_id')
              ->references('id')->on('products')
              ->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('transactions');
}
};