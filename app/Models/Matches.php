<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    // use HasFactory;
    public $table = 'matches';

    protected $fillable = [
        'clubs_id',
        'rivals_id',
        'schedule',
        'created_at',
        'updated_at',
    ];

    public function club()
    {
        return $this->belongsTo('App\Models\Club', 'clubs_id', 'id');
    }

    public function rival()
    {
        return $this->belongsTo('App\Models\Club', 'rivals_id', 'id');
    }
}
