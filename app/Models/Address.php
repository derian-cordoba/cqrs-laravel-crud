<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Address extends Model
{
    protected $table = 'direccion';
    protected $primaryKey = 'id_direccion';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'tipo',
        'calle',
        'numero',
        'ciudad',
        'codigo_postal',
        'pais',
        'principal',
        'creado_en'
    ];

    protected $casts = [
        'principal' => 'boolean',
        'creado_en' => 'datetime'
    ];

    public function customUser(): BelongsTo
    {
        return $this->belongsTo(
            related: CustomUser::class,
            foreignKey: 'id_usuario',
            ownerKey: 'id_usuario',
        );
    }
}
