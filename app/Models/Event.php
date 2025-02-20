<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'lieu',
        'latitude',
        'longitude',
        'date_heure',
        'categorie',
        'user_id',
        'max_participants'
    ];

    protected $casts = [
        'date_heure' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rsvps()
    {
        return $this->hasMany(RSVP::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'rsvps');
    }
}
