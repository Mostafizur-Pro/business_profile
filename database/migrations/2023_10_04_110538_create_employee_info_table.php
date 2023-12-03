<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_info', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('emp_name');
            $table->string('emp_image')->default('https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png');
            $table->string('emp_number', 11)->unique();
            $table->string('emp_nid')->unique();
            $table->string('emp_address');
            $table->string('emp_email')->unique();
            $table->string('password');
            $table->enum('emp_role', ['Sales and Marketing Office', 'Marketing Officer', 'Sales Officer'])->default('Sales Officer'); // Fixed typo here
            $table->string('supperAdmin_id');
            $table->string('supperAdmin_name');
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
        Schema::dropIfExists('employee_info');
    }
}
