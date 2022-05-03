<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmountIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amount_index', function (Blueprint $table) {
          $table->engine = 'MYISAM';
          $table->unsignedBigInteger('amount');
          $table->unsignedBigInteger('index'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('amount_index');
    }
}
