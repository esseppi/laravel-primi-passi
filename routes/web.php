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

    $data = [
        'crypto' => [
            [
                'id' => '1',
                'name' => 'btc'
            ],
            [
                'id' => '2',
                'name' => 'eth'
            ],
            [
                'id' => '3',
                'name' => 'bnb'
            ]
        ],
        'languages' => [
            [
                'id' => '1',
                'lang' => 'Italian'
            ],
            [
                'id' => '2',
                'lang' => 'Française'
            ],
            [
                'id' => '3',
                'lang' => 'German'
            ],
            [
                'id' => '1',
                'lang' => 'Spanish'
            ]
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('prices', function () {
    return view('prices');
})->name('prices');
