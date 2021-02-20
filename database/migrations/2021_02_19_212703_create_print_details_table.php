<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print_details', function (Blueprint $table) {
            $table->id();
            $table->string('colada');
            $table->decimal('peso', 8, 3);
            $table->integer('package');
            $table->string('barcode')->nullable();
            $table->unsignedBigInteger('print_label_id');
            $table->foreign('print_label_id')->references('id')->on('print_labels');
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
        Schema::dropIfExists('print_details');
    }
}
