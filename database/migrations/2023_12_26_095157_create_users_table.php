<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organization');
            $table->string('image')->default('https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png');
            $table->string('number', 11)->unique();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('area')->nullable();
            $table->string('road')->nullable();
            $table->string('gender')->nullable();
            $table->string('action')->nullable();
            $table->json('data')->nullable();
            $table->string('business_type')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['normal', 'basic', 'bronze', 'silver', 'gold', 'platinum'])->default('normal');

            $table->unsignedBigInteger('emp_id')->nullable();
            $table->foreign('emp_id')->references('id')->on('employee_info')->onDelete('cascade');

            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admin_info')->onDelete('cascade');
            $table->string('admin_time')->nullable();

            $table->unsignedBigInteger('super_admin_id')->nullable();
            $table->foreign('super_admin_id')->references('id')->on('admin_info')->onDelete('cascade');
            $table->string('super_admin_time')->nullable();

            
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
        Schema::dropIfExists('users');
    }
}
