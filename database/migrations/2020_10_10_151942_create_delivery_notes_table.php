<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_notes', function (Blueprint $table) {
            $table->id();
            $table->string('order');
            $table->timestamp('date');
            $table->timestamp('departure');
            $table->timestamp('arrival');
            $table->string('puller');
            $table->string('trailer');
            $table->string('second_trailer');
            // $table->string('supplier');
            // $table->string('reference');
            // $table->string('phone');
            // $table->string('location');
            // $table->json('slot');
            // $table->json('pallet');
            // $table->json('type');
            // $table->json('size');
            // $table->json('amount');
            // $table->json('label');
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
