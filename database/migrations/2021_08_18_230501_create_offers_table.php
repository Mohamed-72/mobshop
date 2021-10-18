<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
          
            $table->bigIncrements('id');
            $table->string('image');
            $table->integer('price');
            $table->string('name');
            $table->integer('new_price');
            //     ->constrained('categories');
            $table->mediumText('details');
            $table->mediumText('description');
            $table->integer('quantity');
           // $table->unsignedBigInteger('category_id');
           // $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('offers');
    }
}
