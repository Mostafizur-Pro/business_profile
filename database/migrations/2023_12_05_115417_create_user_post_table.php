<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('post');
            $table->string('category');
            $table->string('subcategories');
            $table->string('division');
            $table->string('district');
            $table->string('area');
            $table->string('image')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user_info')->onDelete('cascade');
            
            $table->string('role');
            $table->json('like')->nullable();
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
        Schema::dropIfExists('user_post');
    }
}
