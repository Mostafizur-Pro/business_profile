<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending', function (Blueprint $table) {
            $table->id();
            $table->string('owner_id');
            $table->string('owner_name');
            $table->string('organization_name');
            $table->string('owner_image')->default('https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png');
            $table->string('owner_number', 11)->unique();
            $table->string('owner_address');
            $table->string('business_type');
            $table->string('owner_email')->unique();
            $table->string('password');

            $table->enum('owner_role', ['normal', 'basic', 'bronze', 'silver', 'gold', 'platinum'])->default('normal'); // Fixed typo here
            
            $table->string('emp_id')->nullable();
            $table->string('emp_name')->nullable();

            $table->string('admin_id')->nullable();
            $table->string('admin_name')->nullable();
            $table->string('adminTime')->nullable();

            $table->string('supperAdmin_id')->nullable();
            $table->string('supperAdmin_name')->nullable();
            $table->string('SupperAdminTime')->nullable();
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
        Schema::dropIfExists('pending');
    }
}
