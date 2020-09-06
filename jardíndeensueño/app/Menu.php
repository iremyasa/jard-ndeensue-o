<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use Notifiable;

    protected $fillable = [
        'baslangic', 'anayemek', 'tatli',

    ];

}
