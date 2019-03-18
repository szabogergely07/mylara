<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name default Posts
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;
}
