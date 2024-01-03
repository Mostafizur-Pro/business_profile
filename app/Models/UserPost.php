<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    use HasFactory;

    protected $table = 'user_post';

    protected $fillable = [
        'title',
        'post',
        'category',
        'subcategories',
        'division',
        'district',
        'area',
        'image',
        'user_id',
        'role',
        'like',
    ];

    protected $casts = [
        'like' => 'json', // Cast 'like' attribute to JSON
    ];

    public function userInfo()
    {
        return $this->belongsTo(UserInfo::class, 'user_id');
    }
}
