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
            'numero' => '123/456789',
            'e-mail' => 'pippo@gmail.com',
        ],
        'social' => [
            'facebook',
            'twitter',
        ],
    ];
    return view('contatti', $data);
});

Route::get('/chiSiamo', function () {
    $data = [
        'history' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]
    ];
    return view('chiSiamo', $data);
});

Route::get('/lavoraConNoi', function () {
    $data = [
        'posizioniAperte' => [],
    ];
    return view('lavoraConNoi', $data);
});
