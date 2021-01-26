<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_management', function (Blueprint $table) {
            $table->id();
            $table->string('om_name')->nullable();
            $table->string('om_phone')->nullable();
            $table->string('om_receiver_address')->nullable()->comment("Địa chỉ người nhận");
            $table->string('om_receiver_province_address')->nullable()->comment("Tỉnh người nhận");
            $table->string('om_receiver_city_address')->nullable()->comment("tp  người nhận");
            $table->mediumText('om_product_description')->nullable();
            $table->integer('om_price')->default(0);
            $table->tinyInteger('om_status')->default(0);
            $table->mediumText("om_status_text")->nullable();
            $table->bigInteger('om_awb')->default(0)->index();
            $table->integer('om_admin_id')->default(0)->index();
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
        Schema::dropIfExists('orders_management');
    }
}
