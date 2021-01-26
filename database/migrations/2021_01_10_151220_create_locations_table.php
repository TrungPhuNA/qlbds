<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('loc_name')->nullable();
            $table->string('loc_name_lower')->nullable();
            $table->string('loc_slug')->index();
            $table->integer('loc_parent_id')->default(0)->index();
            $table->integer('loc_city_id')->default(0)->index();
            $table->integer('loc_district_id')->default(0)->index();
            $table->integer('loc_street_id')->default(0)->index();
            $table->integer('loc_ward_id')->default(0)->index();
            $table->integer('loc_level')->default(0)->index();
            $table->char('loc_code',20)->nullable();
            $table->char('loc_geo_position',50)->nullable();
            $table->char('loc_type',50)->nullable();
            $table->string('loc_description')->nullable();
            $table->string('loc_description_full')->nullable();
            $table->tinyInteger('loc_status')->default(1);
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
        Schema::dropIfExists('locations');
    }
}
