<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate',6)->unique();
            $table->string('color',30);
            $table->string('mark',15);
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->unsignedBigInteger('kind_vehicle_id')->nullable();
            $table->foreign('owner_id')->references('id')->on('owners')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->foreign('driver_id')->references('id')->on('drivers')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->foreign('kind_vehicle_id')->references('id')->on('kind_vehicles')
            ->onDelete('set null')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('vehicles');
    }
}
