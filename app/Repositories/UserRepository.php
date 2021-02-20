<?php

namespace App\Repositories;

use App\User;
use App\Repositories\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version February 20, 2021, 5:20 am UTC
*/

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'rol'
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
        return User::class;
    }
}
