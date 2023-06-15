<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wash_packages', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type_id')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('time')->nullable();
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
        Schema::dropIfExists('wash_packages');
    }
}
