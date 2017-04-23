<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 21/04/17
 * Time: 23:35
 */

namespace App\Transformers;

use App\Models\UniqueCode;
use League\Fractal\TransformerAbstract;


class UniqueCodeTransformer extends TransformerAbstract
{
    public function transform(UniqueCode $uniqueCode)
    {
        return [
            'code' => $uniqueCode->code
        ];
    }
}
