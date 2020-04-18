<?php

namespace laraApp;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = 'posts';
    // primary key
    protected $primarykey = 'id';
    // Timestamps..
    public $timestamps = true;
}
