<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});


Route::get('/work01', function () {
    return view('work01');
});

Route::get('/page1', function () {
    return view('page1');
});



Route::get('/page1', function () {
    $array = [
        "NAME" => "",
        "ID"   => "",
        "GAIN" => "",
        "XXX" => ""

    ];
    return view('page.page1',$array);
});

Route::get('/page2', function () {
    return view('page.page2');
});

Route::get('/page3', function () {
    $array1 = [
        "NAM" => "",
        "PASS" => "",
        "SELEC"  => "",
        "AREA" => ""

    ];
    return view('page.page3',$array1);
});

Route::get('/page4', function () {
    return view('page.page4');
});

Route::post('/page','PageController@show');
Route::post('/page','PageController@show2');



Route::get('/page10/{id}', function ($id) {
    $array = [
        "ID" => $id
    ];
    return view('page.page10',$array);
});

Route::get('/form_register', function () {
    return view('page.form_register');
});

Route::get('/form_login', function () {
    return view('page.form_login');
});