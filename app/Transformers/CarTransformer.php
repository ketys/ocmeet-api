<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 22/04/17
 * Time: 18:57
 */

namespace App\Transformers;


use League\Fractal\TransformerAbstract;
use App\Models\Car;

class CarTransformer extends TransformerAbstract
{
    public function transform(Car $car)
    {
        return [
            'id' => $car->id,
            'number' => $car->number,
            'description' => $car->description,
            'owner' => $car->user == null ? null : $car->user->nickname,
            'category' => $car->votingCategory->name,
            'image' => [
                'thumb' => secure_asset($car->image->path . 'thumbs/' . $car->image->filename),
                'large' => secure_asset($car->image->path . $car->image->filename)
            ]
        ];
    }
}
