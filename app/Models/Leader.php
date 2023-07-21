<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $fillable = [
        'theDate',
        'radiOne',
        'radioTwo',
        'radioThree',
        'radioFour',
        'radioFive',
        'radioSix',
        'radioseven',
        'radioIeght',
        'radioNine',
        'radioTen',
        'theSection',
        'TheSummation',
        'theSupervisor',
    ];
}
