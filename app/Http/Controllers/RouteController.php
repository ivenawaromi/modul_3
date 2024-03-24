<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class RouteController extends Controller
{
    public function index (){
        return "This is from Controller";
    }

    public function profile($profileId){
        return "This is Profile from Controller, profile id: ".$profileId;
    }

    public function show(){

        $routes = Route::getRoutes();
        return view ('show', compact('routes'));
    }

    public function showCache(){

        Artisan::call('route:list');
        $cache = Artisan::output();

        return view('showCache', ['output' => $cache]);
    }

    public function showCacheClear(){

        Artisan::call('route:clear');
        $clearCache= Artisan::output();

        return view('showCacheClear', compact('clearCache'));
    }
}

