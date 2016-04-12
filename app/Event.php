<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'subject', 'host', 'sector', 'content', 'place', 'duration', 'materiel', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
