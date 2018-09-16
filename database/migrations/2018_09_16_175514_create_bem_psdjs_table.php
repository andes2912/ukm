<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBemPsdjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bem_psdjs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('filename');
            $table->enum('status', array('Disetujui','Revisi','Menunggu'));
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
        Schema::dropIfExists('bem_psdjs');
    }
}
