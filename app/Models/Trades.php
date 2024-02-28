<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trades extends Model
{
    protected $fillable = [
        'entry_point',
        'exit_point',
        'stop_loss',
        'take_profit',
        'chart',
        'technicals',
        'fundamentals'
    ];

    use HasFactory;
}
