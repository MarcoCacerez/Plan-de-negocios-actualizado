<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Plan_de_negocio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function fodas():HasMany
    {
        return $this->hasMany(Foda::class);
    }

    public function modelos_canvas():HasMany
    {
        return $this->hasMany(Modelo_canvas::class);
    }

    public function productos():HasMany
    {
        return $this->hasMany(Producto::class);
    }

    public function generalidades():HasOne
    {
        return $this->hasOne(Generalidades::class);
    }
}