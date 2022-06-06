<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autobusi extends Model
{
    use HasFactory;

    public $table = "autobusi";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'registracija', 'model','broj_sjedista',
    ];

    public $timestamps = false;

   
   
}
