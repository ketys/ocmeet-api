<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {

    $api->get('users', 'UserController@getUsersPaginated');
    $api->post('users/authenticate/guest', 'UserController@authenticateGuest');
    $api->post('users/authenticate/member', 'UserController@authenticateMember');

    $api->get('unique-codes', 'UniqueCodeController@getUniqueCodesPaginated');
    $api->get('unique-codes/{count}', 'UniqueCodeController@generateCodes');

    $api->get('cars', 'CarController@getCarsPaginated');
    $api->get('cars/{id}', 'CarController@getCarById');
    $api->post('cars/{id}/vote', 'CarController@voteForCar');
    $api->post('cars/{id}/update', 'CarController@update');
    $api->post('cars/{id}/change-photo', 'CarController@changePhoto');


    $api->get('quiz-answers', 'QuizAnswerController@getQuizAnswersPaginated');
    $api->post('quiz-answers', 'QuizAnswerController@store');
    $api->get('quiz-answers/{code}', 'QuizAnswerController@getByCode');
    $api->post('quiz-answers/{code}/update', 'QuizAnswerController@update');
});
