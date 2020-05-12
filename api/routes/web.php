<?php


//Route::resource('annotations', 'AnnotationController')->names('annotations');

$router->group(['prefix' => 'users'], function ($router) {
    $router->get('', 'UserController@index');
    $router->post('', 'UserController@store');
    $router->put('/{id}', 'UserController@update');
    $router->delete('/{id}', 'UserController@destroy');
});


