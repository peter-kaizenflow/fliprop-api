<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProviderQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_provider_quotes', function (Blueprint $table) {
            $table->id();
            $table->integer('service_provider_profile_id');
            $table->integer('property_id');
            $table->integer('months')->default(0);
            $table->integer('weeks')->default(0);
            $table->integer('days')->default(0);
            $table->decimal('cost',8,2)->nullable();
            $table->integer('service_provider_quote_item_id');
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
        Schema::dropIfExists('service_provider_quotes');
    }
}
