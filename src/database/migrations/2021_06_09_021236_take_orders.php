<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TakeOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('buyer_id');
            $table->string('total_kg', '50')->nullable();
            $table->string('fee', '50')->nullable();
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
        chema::dropIfExists('take_orders');
    }
}
