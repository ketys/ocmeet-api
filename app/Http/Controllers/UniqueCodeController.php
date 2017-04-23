<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 21/04/17
 * Time: 23:26
 */

namespace App\Http\Controllers;

use App\Models\UniqueCode;
use App\Transformers\UniqueCodeTransformer;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
//use Illuminate\Support\Facades\DB;


class UniqueCodeController extends Controller
{
    public function getUniqueCodesPaginated() {
        $codes = UniqueCode::paginate(100);
        return $this->response->paginator($codes, new UniqueCodeTransformer);
    }

    public function generateCodes($count) {
        if(!is_numeric($count) || $count < 1) {
            return $this->response->errorBadRequest("Invalid argument");
        }
        while($count > 0) {
            try {
                UniqueCode::create([
                    'code' => Str::random(6)
                ]);
                $count -= 1;
            } catch(QueryException $e) {
                // do nothing, continue in while cycle without decrementing $count var
            }
        }
        return $this->response->created();
    }

    /*
    public function deleteAllCodes() {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('cars_unique_codes')->truncate();
        DB::table('unique_codes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        return $this->response->noContent();
    }
    */
}