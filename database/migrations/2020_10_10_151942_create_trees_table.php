<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('order')->unique();
            $table->string('puller');
            $table->string('trailer');
            $table->string('second_trailer');
            $table->string('supplier');
            $table->string('reference');
            $table->string('phone');
            $table->string('location');
            $table->json('slot');
            $table->json('pallet');
            $table->json('type');
            $table->json('size');
            $table->json('amount');
            $table->json('label');
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
        Schema::dropIfExists('trees');
    }
}
