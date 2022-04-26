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
    return view('welcome');
});

Route::get('paises', function(){
    $paises=[
        "colombia"=>[
            "capital"=> "Bogota",
            "moneda"=>"peso",
            "poblacion"=>51.6,
            "ciudades"=>[
                "Medellin",
                "Cali",
                "Barranquilla"
            ]
        ],
        "peru"=>[
            "capital"=> "Lima",
            "moneda"=>"sol",
            "poblacion"=>32.9,
            "ciudades"=>[
                "Cusco",
                "Puno",
                "Arequipa"
            ]
        ],
        "paraguay"=>[
            "capital"=> "Asuncion",
            "moneda"=>"guarani",
            "poblacion"=>7.1,
            "ciudades"=>[
                "Capiata",
                "Villa Elisa",
                "Filadelfia"
            ]
        ]
    ];
    
    return view("paises")->with("paises",$paises);


});
