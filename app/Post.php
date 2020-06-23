<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body'
    ];
    // DB relationship
    // Relation table Users (many to one)
    public function user() {
        return $this->belongsTo('App\User');
    }
    // Relation table Comments (one to many)
    public function comments() {
        return $this->hasMany('App\Comment');
    }    
}
