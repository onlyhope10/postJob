<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/posts', function() {
    return response()->json(
        ['posts' =>[
          'title' => 'Post One'  
        ]
        ]);
});
// then open this http://127.0.0.1:8000/api/posts


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
