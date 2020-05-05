<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lendings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_customer');
            $table->integer('amount');
            $table->integer('n_payments');
            $table->integer('rate');
            $table->integer('total');
            $table->date('date_ministry');
            $table->date('due_date');
            $table->timestamps();

            $table->foreign('id_customer')
                ->references('id')
                ->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lendings');
    }
}
