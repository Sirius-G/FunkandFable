<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    // Add 'sections' here to allow mass assignment
    protected $fillable = [
        'title',
        'slug',
        'sections', // <--- Add this
        // any other fields you want mass assignable
    ];

    protected $casts = [
        'sections' => 'array',
    ];

}
