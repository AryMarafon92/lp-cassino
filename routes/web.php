<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site.index');
});

Route::get('changeLocale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'pt', 'es', 'ru', 'ch','kr', 'ru', 'fl', 'jp'])) {
        App::setLocale($locale);

        \Session::put('locale', $locale);
            \Session::put('locale_first_time', $locale);
    }

    return redirect()->back();
});

