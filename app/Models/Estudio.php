<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function estudios():BelongsTo
    {
        return $this->belongsTo(Plan_de_negocio::class);
    }

    public function conceptos()
    {
        return $this->hasMany(Concepto::class);
    }

    public function conclusion()
    {
        return $this->hasOne(Conclusion::class);
    }
}
