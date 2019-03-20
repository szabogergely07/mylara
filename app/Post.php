<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name default Posts
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
    //Post has relationship with a User and it belongs to User
    public function user(){
        return $this->belongsTo('App\User');
    }
}
