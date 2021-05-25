<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    // use HasFactory;

    protected $fillable = [
        'stadiums_id',
        'name',
        'logo',
        'url',
        'thropy',
        'created_at',
        'updated_at',
    ];

    public function stadium()
    {
        return $this->belongsTo('App\Models\Stadium', 'stadiums_id', 'id');
    }

    public function manager()
    {
        return $this->hasMany('App\Models\Manager', 'clubs_id');
    }

    public function player()
    {
        return $this->hasMany('App\Models\Player', 'clubs_id');
    }

    public function match_clubs()
    {
        return $this->hasOne('App\Models\Matches', 'clubs_id');
    }

    public function match_rivals()
    {
        return $this->hasOne('App\Models\Matches', 'rivals_id');
    }
}
