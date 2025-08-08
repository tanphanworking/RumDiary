<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/work', function () {
    return view('pages.work');
});

Route::get('/work/{slug}', function ($slug) {
    // For now, we'll just return a generic view.
    // In a real application, you would fetch the project from the database based on the slug.
    return view('pages.work-detail', ['slug' => $slug]);
});

Route::get('/what-we-do', function () {
    return view('pages.what-we-do');
});

Route::get('/start-a-project', function () {
    return view('pages.start-a-project');
});
