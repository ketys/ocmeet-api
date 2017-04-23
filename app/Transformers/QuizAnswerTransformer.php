<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 23/04/17
 * Time: 10:13
 */

namespace App\Transformers;


use App\Models\QuizAnswer;
use League\Fractal\TransformerAbstract;

class QuizAnswerTransformer extends TransformerAbstract
{
    public function transform(QuizAnswer $quizAnswer)
    {
        return [
            'id' => $quizAnswer->id,
            'answer1' => $quizAnswer->answer1,
            'answer2' => $quizAnswer->answer2,
            'answer3' => $quizAnswer->answer3,
            'answer4' => $quizAnswer->answer4,
            'answer5' => $quizAnswer->answer5,
            'answer6' => $quizAnswer->answer6,
            'answer7' => $quizAnswer->answer7,
            'answer8' => $quizAnswer->answer8,
            'answer9' => $quizAnswer->answer9,
            'answer10' => $quizAnswer->answer10,
            'code' => $quizAnswer->uniqueCode->code,
            'user' => $quizAnswer->uniqueCode->user->nickname
        ];
    }
}
