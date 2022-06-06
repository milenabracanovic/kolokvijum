<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tura extends Model
{
    use HasFactory;

    public $table = "tura";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'autobusi_id', 'vrijeme',
    ];

    public $timestamps = false;

    public function tura()
    {
        return $this->belongsTo(Autobusi::class, 'autobusi_id');
    }

   
}