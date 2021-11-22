<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/member/search/{value}',[\App\Http\Controllers\API\MemberController::class,'searchByName']);
Route::get('/member/search',[\App\Http\Controllers\API\MemberController::class,'searchByName']);
Route::get('/book/search',[\App\Http\Controllers\API\BookController::class,'searchByBook']);
Route::resource('/book',App\Http\Controllers\API\BookController::class); //defines all routes for CRUD Ops
Route::resource('/member',App\Http\Controllers\API\MemberController::class); //defines all routes for CRUD Ops
Route::resource('/issuedbook',App\Http\Controllers\API\IssueBookController::class); //defines all routes for CRUD Ops

//Route::get('/book',function(){
//    return Student::all();
//});
//Route::get('/student/{id}',function($id){
//    return Student::find($id);
//});
//Route::post('/student',function(Request $request){
//    return Student::create($request->all());
//});
//Route::put('/student/{id}',function(Request $request, $id){
//   $a=Student::findOrFail($id);
//   $a->update($request->all());
//   return $a;
//});
//Route::delete('/student/{id}',function(Request $request, $id){
//    $a=Student::find($id)->delete();
//    return 204;
//});
