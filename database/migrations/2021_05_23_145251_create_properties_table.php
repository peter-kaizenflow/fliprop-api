<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->text('erf_size')->nullable();
            $table->text('levies',8,2)->nullable();
            $table->double('rates_and_taxes',8,2)->nullable();
            $table->text('age')->nullable();
            $table->text('house_size')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('toilets')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('closed_parking')->nullable();
            $table->integer('street_parking')->nullable();
            $table->integer('address_id')->nullable();
            $table->integer('views')->nullable();
            $table->integer('property_type')->nullable();
            $table->integer('estimation')->nullable();
            $table->double('price',8,2)->nullable();
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
        Schema::dropIfExists('properties');
    }
}