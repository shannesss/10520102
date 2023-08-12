<?php

Route::get('/',function() {
    return view('welcome');


});

Route::get('/belajar', function() {
    echo 'belajar TPEC1 laravel,tulisan ini ditampilkan dari view';
    return view('belajar');

});

Route::get('/Nama', function() {
    echo 'nama Sehan belajar laravel,tulisan ini ditampilkan dari view';
    return view('Nama');

});

Route::get('/kelas', function() {
    echo 'kelas IS-3 belajar laravel,tulisan ini ditampilkan dari view';
    return view('kelas');

});
