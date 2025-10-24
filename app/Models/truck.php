<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truck extends Model
{
    use HasFactory;
    protected $fillable = [
        'truck_number',
        'truck_license',
        'truck_location',
    ];
}
