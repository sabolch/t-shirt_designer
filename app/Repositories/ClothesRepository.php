<?php

namespace App\Repositories;

use App\Models\Clothes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClothesRepository
 * @package App\Repositories
 * @version May 2, 2018, 5:19 am UTC
 *
 * @method Clothes findWithoutFail($id, $columns = ['*'])
 * @method Clothes find($id, $columns = ['*'])
 * @method Clothes first($columns = ['*'])
*/
class ClothesRepository extends BaseRepository
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
        return Clothes::class;
    }
}
