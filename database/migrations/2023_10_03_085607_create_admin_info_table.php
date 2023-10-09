<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_info', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name');
            $table->string('number', 11)->unique();
            $table->string('admin_email')->unique();
            $table->string('admin_image')->default('https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png');
            $table->string('password');
            $table->enum('role', ['admin', 'superAdmin'])->default('admin');
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
        Schema::dropIfExists('admin_info');
    }
}
