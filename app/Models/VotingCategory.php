<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 21/04/17
 * Time: 23:03
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class VotingCategory extends Model
{
    public $timestamps = false;
    protected $table = 'voting_categories';

    protected $fillable = [
        'name'
    ];

    public function cars() {
        return $this->hasMany('App\Models\Car');
    }
}