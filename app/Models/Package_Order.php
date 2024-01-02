<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package_Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'token',
        'amount',
        'number',
        'name',
        'districts',
        'division',
        'area',
        'category',
        'subcategories',
    ];

    protected $table = "package_order";

    public function user()
    {
        return $this->belongsTo(UserInfo::class, 'user_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
