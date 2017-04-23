<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 22/04/17
 * Time: 23:08
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    public $timestamps = false;
    protected $table = 'quiz_answers';

    protected $fillable = [
        'answer1', 'answer2', 'answer3', 'answer4', 'answer5', 'answer6',
        'answer7', 'answer8', 'answer9', 'answer10', 'unique_code_id'
    ];

    public function uniqueCode() {
        return $this->belongsTo('App\Models\UniqueCode');
    }
}