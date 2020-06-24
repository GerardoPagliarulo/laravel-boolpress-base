<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];
    // DB relationship
    // Relation table Posts (many to many)
    public function posts() {
        return $this->belongsToMany('App\Post');
    }        
}
