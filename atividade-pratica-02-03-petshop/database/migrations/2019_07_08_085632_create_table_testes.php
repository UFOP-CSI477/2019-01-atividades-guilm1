<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTestes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testes', function (Blueprint $table) {
            $table->increments('id',10);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('procedure_id');
            $table->date('date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->foreign('procedure_id')
                  ->references('id')
                  ->on('procedures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testes');
    }
}
