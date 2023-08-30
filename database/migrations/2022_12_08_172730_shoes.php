<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->id('shoes_id');
            $table->BigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->integer('price');
            $table->string('detail');
            $table->string('image');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoes');
    }
};
