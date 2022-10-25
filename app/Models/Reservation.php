<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel',
        'nameClient',
        'numberRoom',

    ];
}
