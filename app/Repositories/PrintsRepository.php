<?php

namespace App\Repositories;

use App\Models\Prints;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PrintsRepository
 * @package App\Repositories
 * @version May 2, 2018, 6:21 am UTC
 *
 * @method Prints findWithoutFail($id, $columns = ['*'])
 * @method Prints find($id, $columns = ['*'])
 * @method Prints first($columns = ['*'])
*/
class PrintsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prints::class;
    }
}
