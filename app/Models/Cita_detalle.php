<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cita_detalle
 * @package App\Models
 * @version October 2, 2021, 10:44 pm UTC
 *
 * @property string $id_cita
 */
class Cita_detalle extends Model
{
    //use SoftDeletes;

    use HasFactory;

  
    public $table = 'cita_detalle';
    public $timestamps = false;
    public $primaryKey = 'idcita_detalle';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_cita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita_detalle' => 'integer',
        'id_cita' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_cita' => 'nullable|string|max:45'
    ];

    
}
