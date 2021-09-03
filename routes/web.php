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
    return view('Home');
})->name('homepage');

Route::get('/about', function () {
    $data =[
        // array associativo
        'title' => 'The PHP Framework for Web Artisans',
        'argomento' => 'Laravel is a web application framework with expressive, elegant syntax.
        We’ve already laid the foundation — freeing you to create without sweating the small things.

        '
    ];
    return view('about',$data);
})->name('su-di-noi');

Route::get('/contact', function () {
    $data = [
        'title' => 'contact page',
        'nomi' => ['Alfredo','Gofredo','Adalberto']
    ];
    return view('contact', $data);
})->name('contatti');

Route::get('/partners', function () {
   $data = [
       'titolo' => 'Our partners',
       'loro' => ['Jump24', 'Madewithlove', 'Tighten']
   ];
    return view('partner', $data);
})->name('partnership');
