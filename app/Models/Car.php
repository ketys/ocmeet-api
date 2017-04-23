<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 21/04/17
 * Time: 23:05
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;
    protected $table = 'cars';

    protected $fillable = [
        'number', 'description', 'image_id', 'voting_category_id', 'user_id'
    ];

    public function votingCategory() {
        return $this->belongsTo('App\Models\VotingCategory');
    }

    public function image() {
        return $this->belongsTo('App\Models\Image');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function votes() {
        return $this->belongsToMany('App\Models\UniqueCode', 'cars_unique_codes', 'car_id', 'unique_code_id');
    }

}