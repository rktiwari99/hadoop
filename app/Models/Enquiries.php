<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiries extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'mobile', 'email', 'catagory', 'sub_catagory', 'details', 'status'
    ];
}
