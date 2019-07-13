<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProcedures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedures', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('name', 60);
            $table->decimal('price', 10, 2);
            $table->unsignedInteger('user_id');      
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedures');
    }
}
