<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $casts = [
        'deleted_at' => 'datetime',
    ];


    protected $fillable = ['youtube_id', 'title'];

    //Table Name
    protected $table = 'videos';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

}