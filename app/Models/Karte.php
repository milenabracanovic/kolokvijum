<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karte extends Model
{
    use HasFactory;

    public $table = "karte";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'broj_karte', 'tura_id', 'putnik_id',
    ];

    public $timestamps = false;

    public function karta_tura()
    {
        return $this->belongsTo(Tura::class, 'tura_id');
    }

    public function karta_putnici()
    {
        return $this->belongsTo(Putnici::class, 'putnik_id');
    }




   
}