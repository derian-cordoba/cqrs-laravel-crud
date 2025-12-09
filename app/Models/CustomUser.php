<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
}
