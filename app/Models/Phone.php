<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id_telefono
 * @property int $id_usuario
 * @property string $tipo
 * @property string $numero
 * @property string $compania
 * @property bool $principal
 * @property bool $activo
 * @property \DateTimeInterface $creado_en
 * @property-read CustomUser $customUser
 */
final class Phone extends Model
{
    protected $table = 'telefono';
    protected $primaryKey = 'id_telefono';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'tipo',
        'numero',
        'compania',
        'principal',
        'activo',
        'creado_en',
    ];

    protected function casts(): array
    {
        return [
            'principal' => 'boolean',
            'activo' => 'boolean',
            'creado_en' => 'datetime'
        ];
    }

    public function customUser(): BelongsTo
    {
        return $this->belongsTo(
            related: CustomUser::class,
            foreignKey: 'id_usuario',
            ownerKey: 'id_usuario',
        );
    }
}
