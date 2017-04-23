<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 23/04/17
 * Time: 10:11
 */

namespace App\Http\Controllers;


use App\Models\QuizAnswer;
use App\Services\UniqueCodeService;
use App\Transformers\QuizAnswerTransformer;
use Illuminate\Http\Request;

class QuizAnswerController extends Controller
{
    private $uniqueCodeService;

    public function __construct(UniqueCodeService $uniqueCodeService)
    {
        $this->uniqueCodeService = $uniqueCodeService;
    }

    public function getQuizAnswersPaginated()
    {
        $quizAnswers = QuizAnswer::paginate(10);
        return $this->response->paginator($quizAnswers, new QuizAnswerTransformer);
    }

    public function getByCode($code) {
        $uniqueCode = $this->uniqueCodeService->getCode($code);
        if($uniqueCode == null) {
            return $this->response->errorBadRequest("Code is not valid");
        }
        $quizAnswer = QuizAnswer::where('unique_code_id', $uniqueCode->id)->first();
        return $this->response->item($quizAnswer, new QuizAnswerTransformer);
    }

    public function store(Request $request) {
        $uniqueCode = $this->uniqueCodeService->getCode($request->input('code'));
        if($uniqueCode == null) {
            return $this->response->errorBadRequest("Code is not valid");
        }
        $user = $uniqueCode->user;
        if($user == null) {
            return $this->response->errorBadRequest("Code is not related to any user");
        }
        $alreadyExists = QuizAnswer::where('unique_code_id', $uniqueCode->id)->first();
        if($alreadyExists != null) {
            return $this->response->errorBadRequest("Quiz answers already exist for this user");
        }

        $quizAnswer = new QuizAnswer();
        $quizAnswer->fill($request->except(['code']));
        $quizAnswer->unique_code_id = $uniqueCode->id;
        $quizAnswer->save();

        return $this->response->item($quizAnswer, new QuizAnswerTransformer);
    }

    public function update($code, Request $request) {
        $uniqueCode = $this->uniqueCodeService->getCode($code);
        if($uniqueCode == null) {
            return $this->response->errorBadRequest("Code is not valid");
        }
        $user = $uniqueCode->user;
        if($user == null) {
            return $this->response->errorBadRequest("Code is not related to any user");
        }

        $quizAnswer = QuizAnswer::where('unique_code_id', $uniqueCode->id)->first();
        $quizAnswer->fill($request->all());
        $quizAnswer->save();

        return $this->response->item($quizAnswer, new QuizAnswerTransformer);
    }
}
