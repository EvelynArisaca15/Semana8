<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cita
 * @package App\Models
 * @version October 2, 2021, 10:44 pm UTC
 *
 * @property string $id_paciente
 * @property string $fecha_cita
 * @property string $id_doctor
 */
class Cita extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'cita';
    public $timestamps = false;
    public $primaryKey = 'idcita';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_paciente',
        'fecha_cita',
        'id_doctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita' => 'integer',
        'id_paciente' => 'string',
        'fecha_cita' => 'date',
        'id_doctor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_paciente' => 'nullable|string|max:45',
        'fecha_cita' => 'nullable',
        'id_doctor' => 'nullable|string|max:45'
    ];

    
}
