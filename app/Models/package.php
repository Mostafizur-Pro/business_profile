<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Package;


namespace App\Models;
use Illuminate\Database\Eloquent\Model;




class Package extends Model
{
    // Model code here
    protected $fillable = [
        'title',
        'price',
        'details',
    ];


    protected $table = 'packages';
}