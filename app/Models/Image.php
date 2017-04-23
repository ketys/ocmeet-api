<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 21/04/17
 * Time: 23:12
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;
    protected $table = 'images';

    protected $fillable = [
        'path', 'filename'
    ];
}