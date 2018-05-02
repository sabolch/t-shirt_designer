<?php

namespace App\Repositories;

use App\Models\Color;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ColorRepository
 * @package App\Repositories
 * @version May 1, 2018, 7:10 pm UTC
 *
 * @method Color findWithoutFail($id, $columns = ['*'])
 * @method Color find($id, $columns = ['*'])
 * @method Color first($columns = ['*'])
*/
class ColorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'color'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Color::class;
    }
}
