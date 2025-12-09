<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id_direccion
 * @property int $id_usuario
 * @property string $tipo
 * @property string $calle
 * @property string $numero
 * @property string $ciudad
 * @property string $codigo_postal
 * @property string $pais
 * @property bool $principal
 * @property \DateTimeInterface $creado_en
 * @property-read CustomUser $customUser
 */
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
