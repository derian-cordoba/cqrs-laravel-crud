<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id_usuario
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property \Illuminate\Support\Carbon $fecha_nacimiento
 * @property \Illuminate\Support\Carbon $fecha_registro
 * @property-read Collection<Phone> $phones
 * @property-read Collection<Phone> $addresses
 */
final class CustomUser extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'fecha_nacimiento',
        'fecha_registro',
        'activo',
    ];

    protected function casts(): array
    {
        return [
            'fecha_nacimiento' => 'date',
            'fecha_registro' => 'datetime',
            'activo' => 'boolean'
        ];
    }

    public function phones(): HasMany
    {
        return $this->hasMany(
            related: Phone::class,
            foreignKey: 'id_usuario',
            localKey: 'id_usuario',
        );
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(
            related: Address::class,
            foreignKey: 'id_usuario',
            localKey: 'id_usuario',
        );
    }
}
