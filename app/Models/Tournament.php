<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'tournament_state',
        'tournament_name',
        'tournament_desc1',
        'tournament_desc2',
        'tournament_date',
        'tournament_rank1',
        'tournament_rank2',
        'tournament_pricepool',
        'tournament_img',
    ];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}