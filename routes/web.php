<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\File;

Route::get('/', function () {
    return view('welcome');
});


//Routing
Route::get('/routing', function(){
    return view ('routing');
});

//Basic Routing
Route::get('/basic_routing', function(){
    return 'Hello world';
});

//View Route
Route::view('/view_route', 'view_route');
Route::view('/view_route', 'view_route', ['name' => 'Ivena']);

//Controller Route
Route::get('/controller_route', [RouteController::class, 'index']);

//Redirect Route
Route::redirect('/', '/routing');

//Route Parameter(Reqired Parameter)
Route::get('/user/{id}', function($id){
    return "User ID: ".$id;
});
Route::get('/posts/{post}/comments/{comments}', function($postId, $commentId){
    return "Post ID: ".$postId.",  Comment ID: ".$commentId;
});

//Route Parameter(Optional parameter)
Route::get('/username/{name?}', function($name = null){
    return 'Username: '.$name;
});

//Route With Regular Expression Contraints
Route::get('/title/{title}', function($title){
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');

//Named Route
Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

//Route Priority
// Route::get('/route_priority/{rpId}', function($rpId){
//     return "This is Route One";
// });
Route::get('/route_priority/user', function(){
    return "This is Route 1";
});
Route::get('route_priority/user', function(){
    return "This is Route 2";
});

// Fallback Routes
Route::fallback(function(){
    return 'this is Fallback Route';
});

//Route Groups (Route Prefixes & Route Name Prefixes)
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', function(){
        return 'This is admin dashboard';
    })->name('dashboard');

    Route::get('/users', function(){
        return 'This is user data on admin page';
    })->name('users');

    Route::get('/items', function(){
        return 'This is item data on admin page';
    })->name('items');
});

Route::get('/routeList', [RouteController::class, 'show'])->name('routeList');

// Route::get('/cacheList', [RouteController::class, 'showCache'])->name('cacheList');

Route::middleware('web')->group(function(){
    Route::get('cacheList', [RouteController::class, 'showCache'])->name('cacheList');
    Route::get('clearCache', [RouteController::class, 'showCacheClear'])->name('clearCache');
});
