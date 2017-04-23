<?php
/**
 * Created by PhpStorm.
 * User: ketys
 * Date: 21/04/17
 * Time: 20:49
 */

namespace App\Http\Controllers;


use App\Models\User;
use App\Services\UniqueCodeService;
use App\Transformers\UserTransformer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $uniqueCodeService;

    public function __construct(UniqueCodeService $uniqueCodeService)
    {
        $this->uniqueCodeService = $uniqueCodeService;
    }

    public function getUsersPaginated() {
        $users = User::paginate(20);
        return $this->response->paginator($users, new UserTransformer);
    }

    public function authenticateGuest(Request $request) {
        if(!$request->has('nickname') || !$request->has('code')) {
            return $this->response->errorBadRequest("Some field is missing");
        }

        $code = $this->uniqueCodeService->getCode($request->input('code'));
        if($code == null) {
            return $this->response->errorBadRequest("Invalid code");
        }

        $user = User::where('unique_code_id', $code->id)->first();
        if($user == null) {
            // create & authenticate
            $sameNickname = User::where('nickname', $request->input('nickname'))->first();
            if($sameNickname != null) {
                return $this->response->errorBadRequest("Nickname is already in use");
            }
            $user = User::create([
                'nickname' => $request->input('nickname'),
                'role' => 'guest',
                'unique_code_id' => $code->id
            ]);
            // TODO
        } else {
            // authenticate
            if($user->nickname != $request->input('nickname')) {
                return $this->response->errorBadRequest("Wrong nickname");
            }
            // TODO
        }
    }

    public function authenticateMember(Request $request) {

    }
}