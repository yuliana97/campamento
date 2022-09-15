<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;
    //atributos suceptibles de cargas masivas
    protected $fillable =[
        'name',
        'description',
        'website',
        'phone',
        'user_id',
        'average_cost',
        'average_rating'
    ];
}
