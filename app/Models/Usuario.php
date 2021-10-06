<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Usuario
 * @package App\Models
 * @version October 2, 2021, 10:44 pm UTC
 *
 * @property string $apellidos
 * @property string $nombres
 * @property string $usuario
 * @property string $password
 */
class Usuario extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'usuario';
    public $timestamps = false;
    public $primaryKey = 'idusuario';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellidos',
        'nombres',
        'usuario',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idusuario' => 'integer',
        'apellidos' => 'string',
        'nombres' => 'string',
        'usuario' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apellidos' => 'nullable|string|max:205',
        'nombres' => 'nullable|string|max:205',
        'usuario' => 'nullable|string|max:45',
        'password' => 'nullable|string|max:45'
    ];

    
}
