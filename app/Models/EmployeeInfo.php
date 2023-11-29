<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    use HasFactory;


    protected $fillable = [
        'emp_id',
        'emp_name',
        'emp_image',
        'emp_number',
        'emp_address',
        'emp_email',
        'password',
        'emp_role',
        'supperAdmin_id',
        'supperAdmin_name',
    ];

    protected $hidden = [
        'password', // Hide the password field
    ];

    // Define the table name explicitly
    protected $table = 'employee_info';
}
