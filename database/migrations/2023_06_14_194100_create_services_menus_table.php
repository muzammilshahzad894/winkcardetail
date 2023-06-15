<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('time')->nullable();
            $table->string('price')->nullable();
            $table->string('vehicle_type_id')->nullable();
            $table->string('wash_package_id')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('services_menus');
    }
}
