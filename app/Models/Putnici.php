<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Putnici extends Model
{
    use HasFactory;

    public $table = "putnici";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ime', 'prezime','godina',
    ];

    public $timestamps = false;

   
   
}
