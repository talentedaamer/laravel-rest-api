<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
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
