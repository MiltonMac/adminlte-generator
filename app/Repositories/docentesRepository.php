<?php

namespace App\Repositories;

use App\Models\docentes;
use App\Repositories\BaseRepository;

/**
 * Class docentesRepository
 * @package App\Repositories
 * @version February 20, 2021, 4:09 am UTC
*/

class docentesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cedula',
        'nombre',
        'apellido',
        'correo',
        'celular',
        'estado'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return docentes::class;
    }
}
