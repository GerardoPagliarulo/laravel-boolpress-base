<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'body'
    ];
    // DB relationship
    // Relation table Users (many to one)
    public function post() {
        return $this->belongsTo('App\Post');
    }
}
