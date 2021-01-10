<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->string('e_title',255)->nullable();
            $table->string('e_slug',255)->index()->nullable();
            $table->string('e_apartment_number',30)->nullable();
            $table->integer('e_street')->default(0)->index();
            $table->integer('e_ward')->default(0)->index();
            $table->integer('e_district')->default(0)->index();
            $table->integer('e_city')->default(0)->index();
            $table->float('e_horizontal')->default(0);
            $table->float('e_long')->default(0);
            $table->float('e_acreage')->default(0);
            $table->bigInteger('e_price')->default(0);
            $table->string('e_structure')->nullable();
            $table->tinyInteger('e_status')->default(0)->index();
            $table->integer('e_user_id')->default(0)->index();
            $table->integer('e_admin_id')->default(0)->index();
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
        Schema::dropIfExists('estates');
    }
}
