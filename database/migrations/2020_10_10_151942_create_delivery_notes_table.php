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
            $table->integer('order')->nullable();
            $table->string('destination')->nullable();
            $table->string('reference')->nullable();
            $table->timestamp('date')->nullable();
            $table->timestamp('departure')->nullable();
            $table->timestamp('arrival')->nullable();
            $table->string('puller')->nullable();
            $table->string('trailer')->nullable();
            $table->string('second_trailer')->nullable();
            // $table->string('supplier');
            // $table->string('reference');
            // $table->string('phone');
            // $table->string('location');
            $table->json('line_items')->nullable();
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
