<?php

namespace App\Http\Controllers;

use App\Services\UniqueCodeService;
use App\Transformers\CarTransformer;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    private $uniqueCodeService;

    public function __construct(UniqueCodeService $uniqueCodeService)
    {
        $this->uniqueCodeService = $uniqueCodeService;
    }

    public function getCarsPaginated() {
        $cars = Car::paginate(10);
        return $this->response->paginator($cars, new CarTransformer);
    }

    public function getCarById($id) {
        $car = Car::find($id);
        return $this->response->item($car, new CarTransformer);
    }

    // prihlaseni do appky pod unique kodem - jak quest, tak user ... kod se ulozi do devicu
    // ... tam se taky vedou již proběhlá hlasování, tzn. na opětovné hlasování pro stejnou kategorii
    // upozorňuje appka samotná, backend api pouze přepíše hlasy ...
    public function voteForCar($id, Request $request) {
        // TODO test, jestli code a auth user jsou v relaci, aby někdo nevotoval s cizim kodem
        if($request->has('code')) {
            $code = $this->uniqueCodeService->getCode($request->input('code'));
            if($code != null) {
                $car = Car::find($id);
                $alreadyVotedCars = $code->cars;
                $votingCategoryName = $car->votingCategory->name;
                foreach($alreadyVotedCars as $avc) {
                    if($avc->votingCategory->name == $votingCategoryName) {
                        $avc->votes()->detach($code->id);
                    }
                }
                $car->votes()->attach($code->id);
                return $this->response->item($car, new CarTransformer);
            } else {
                return $this->response->errorBadRequest("Code is not valid");
            }
        } else {
            return $this->response->errorBadRequest("Code not provided");
        }
    }

    public function update($id, Request $request) {
        if(false/*TODO authentication*/) {
            return $this->response->errorUnauthorized("You are not allowed to update the car");
        }
        $car = Car::find($id);
        if($request->has('description')) {
            $car->description = $request->input('description');
        }
        $car->save();
        return $this->response->item($car, new CarTransformer);
    }

    public function changePhoto($id, Request $request) {
        // TODO
    }
}
