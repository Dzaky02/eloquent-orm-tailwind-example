<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    // use HasFactory;
    
    protected $fillable = [
        'clubs_id',
        'name',
        'age',
        'nationality',
        'created_at',
        'updated_at',
    ];

    public function club()
    {
        return $this->belongsTo('App\Models\Club', 'clubs_id', 'id');
    }
}
