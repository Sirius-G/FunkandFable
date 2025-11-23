<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insta extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['url', 'content'];

    //Table Name
    protected $table = 'insta';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

}