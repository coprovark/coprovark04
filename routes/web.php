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
    return view('page.page3');
});

Route::get('/page4', function () {
    return view('page.page4');
});

Route::post('/page','PageController@show');



Route::get('/page10/{id}', function ($id) {
    $array = [
        "ID" => $id
    ];
    return view('page.page10',$array);
});