<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
});

/**
 * group api v1 routes under
 * Api\v1 directory in controllers
 */
Route::group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function () {
    Route::apiResource('/posts', 'PostController');
    Route::group(['prefix' => 'posts' ], function () {
        Route::apiResource('{post}/comments', 'CommentController');
    });
});
