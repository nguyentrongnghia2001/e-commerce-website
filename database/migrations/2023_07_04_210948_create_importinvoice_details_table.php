<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportinvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importinvoice_details', function (Blueprint $table) {
            $table->id();

            $table->integer('importinvoices_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->double('importinvoices_price');
            $table->integer('importinvoices_qty');

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
        Schema::dropIfExists('importinvoice_details');
    }
}
