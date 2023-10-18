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
        Schema::create('comic_books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 70);
            $table->string('description');
            $table->string('thumb');
            $table->float('price');
            $table->string('series', 30);
            $table->date('sale_date');
            $table->string('type', 30);
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
        Schema::dropIfExists('comic_books');
    }
};