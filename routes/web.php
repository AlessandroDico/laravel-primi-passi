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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = [
        'nome' => 'Pippo',
        'pagesLinks' => [
            'Contatti' => 'contatti',
            'Chi siamo' => 'chiSiamo',
            'Lavora con noi' => 'lavoraConNoi',
        ]
    ];
    return view('home', $data);
});

Route::get('/contatti', function () {
    $data = [
        'contatti' => [
            'numero' => 123,
            'mail' => 'pippo@gmail.com',
        ],
        'social' => [
            'facebook',
            'twitter',
        ],
    ];
    return view('contatti', $data);
});

Route::get('/chiSiamo', function () {
    return view('chiSiamo');
});

Route::get('/lavoraConNoi', function () {

    return view('lavoraConNoi');
})->name('work');
