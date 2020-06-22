<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'avatar'
    ];
    // Timestamps overwriting
    public $timestamps = false;
    // DB relationship
    public function user() {
        return $this->belongsTo('App\User');
    }
}
