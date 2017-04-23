<?php

/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 22/04/17
 * Time: 20:54
 */

namespace App\Services;

use App\Models\UniqueCode;

class UniqueCodeService
{
    public function getCode($code) {
        return UniqueCode::where('code', $code)->first();
    }
}