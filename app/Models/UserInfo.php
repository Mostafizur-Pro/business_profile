<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_name',
        'organization_name',
        'owner_image',
        'owner_number',
        'division',
        'business_type',
        'owner_email',
        'password',
        'owner_role',
        'emp_id',
        'emp_name',
        'admin_id',
        'admin_name',
        'adminTime',
        'supperAdmin_id',
        'supperAdmin_name',
        'SupperAdminTime',
    ];
    protected $table = "user_info";

    public function isUser()
    {
        return $this->role === 'admin'; // Assuming 'role' is a column in your users table
    }
}
