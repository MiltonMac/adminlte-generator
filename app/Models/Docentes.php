<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class docentes
 * @package App\Models
 * @version February 20, 2021, 4:09 am UTC
 *
 * @property string $cedula
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property string $celular
 * @property integer $estado
 */
class Docentes extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'docentes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'correo',
        'celular',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cedula' => 'string',
        'nombre' => 'string',
        'apellido' => 'string',
        'correo' => 'string',
        'celular' => 'string',
        'estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cedula' => 'required|min:10|numeric',
        'nombre' => 'required|max:20',
        'apellido' => 'required|max:20',
        'correo' => 'required|max:50',
        'celular' => 'required|min:10|numeric'
    ];

    
}
