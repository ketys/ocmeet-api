<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 21/04/17
 * Time: 23:01
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniqueCode extends Model
{
    public $timestamps = false;
    protected $table = 'unique_codes';

    protected $fillable = [
        'code'
    ];

    public function cars() {
        return $this->belongsToMany('App\Models\Car', 'cars_unique_codes', 'unique_code_id', 'car_id');
    }

    public function user() {
        return $this->hasOne('App\Models\User', 'unique_code_id');
    }
}