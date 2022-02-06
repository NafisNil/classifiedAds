<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->string('category')->nullable();
            $table->integer('premium')->default(0);
            $table->integer('weekly')->default(0);
            $table->string('location');
            $table->string('phone');
            $table->string('email');
            $table->string('user');
            $table->string('city');
            $table->string('subcategory');
            $table->string('age')->nullable();
            $table->string('cost')->nullable();

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
        Schema::dropIfExists('advertises');
    }
}
