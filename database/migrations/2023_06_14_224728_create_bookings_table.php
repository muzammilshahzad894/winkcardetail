<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type_id')->nullable();
            $table->string('wash_package_id')->nullable();
            $table->string('services_menu_id')->nullable();
            $table->string('duration')->nullable();
            $table->string('total_price')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('vehicle_make')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->string('booking_date')->nullable();
            $table->string('message')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
