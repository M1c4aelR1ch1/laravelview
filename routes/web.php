<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/dosen/index', function () {
    return view('dosen.index');
});

Route::get('/fakultas', function () {
    //return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);
    // ctrl + /
    // return view('fakultas.index',
    // ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi"]]);

    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi"];
    return view('fakultas.index')->with(["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi"]]);
});

