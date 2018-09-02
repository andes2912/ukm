<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputDcfcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_dcfcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('filename');
            $table->enum('status', array('Revisi','Baru'));
            $table->enum('user', array('BEM','KMH'));
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
        Schema::dropIfExists('input_dcfcs');
    }
}
