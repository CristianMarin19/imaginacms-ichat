<?php

use Illuminate\Routing\Router;

Route::prefix('/conversations')->group(function (Router $router) {
    $router->post('/', [
        'as' => 'api.ichat.conversations.create',
        'uses' => 'ConversationApiController@create',
        'middleware' => ['auth:api','auth-can:ichat.conversations.create']
    ]);
    $router->get('/', [
        'as' => 'api.ichat.conversations.index',
        'uses' => 'ConversationApiController@index',
        'middleware' => ['auth:api'],
    ]);
    $router->get('/{criteria}', [
        'as' => 'api.ichat.conversations.show',
        'uses' => 'ConversationApiController@show',
        'middleware' => ['auth:api'],
    ]);
    $router->put('/{criteria}', [
        'as' => 'api.ichat.conversations.update',
        'uses' => 'ConversationApiController@update',
        'middleware' => ['auth:api'],
    ]);
    $router->delete('/{criteria}', [
        'as' => 'api.ichat.conversations.delete',
        'uses' => 'ConversationApiController@delete',
        'middleware' => ['auth:api'],
    ]);
});
