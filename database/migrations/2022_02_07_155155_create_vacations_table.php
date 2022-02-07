<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->id();
            $table->string("address",150);
            $table->string("post_code",10);
            $table->string("city",70);
            $table->string("country",150);
            $table->tinyInteger('rooms')->unsigned();
            $table->boolean('pool')->default(true);
            $table->boolean('avaiable')->default(true);
            $table->float('price', 11, 2);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('vacations');
    }
}
