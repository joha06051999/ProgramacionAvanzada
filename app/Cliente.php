<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    
    protected $table = 'cliente_cliente';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 'nombre', 'apellido', 'genero', 'estadoCivil', 'fechaNacimiento', 'correo', 'telefono', 'celular', 'direccion'
    ];

    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
