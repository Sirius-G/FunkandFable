<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageContents extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    //protected $fillable = [    ];

    //Table Name
    protected $table = 'page_contents';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

}