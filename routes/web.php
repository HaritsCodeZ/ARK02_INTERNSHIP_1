<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('ARK02_Homepage');
});

Route::get('/career', function () {
    return view('layouts.ARK02_Careerpage');
});

Route::get('/agentapp', function () {
    return view('layouts.ARK02_Agentapplication');
});

Route::get('/aboutus', function () {
    return view('layouts.ARK02_Aboutus');
});


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'zh', 'ms'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

