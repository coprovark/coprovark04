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
Route::post('/page','PageController@show3');

Route::get('/page10/{id}', function ($id) {
    $array = [
        "ID" => $id
    ];
    return view('page.page10',$array);
});

Route::get('/form_register', function () {
    return view('page.form_register');
});

Route::get('/form_registerSTD', function () {
    return view('page.form_registerSTD');
});

Route::get('/form_login', function () {
    $data = [
        "USERNAME" => "",
        "PASS"   => ""

    ];
    return view('page.form_login', $data);
});

Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/form_check_login', function () {
    $users = [
        'users' => []
    ];
    return view('page.form_check_login',$users);
});
Route::post('/form_check_login','PageController@form_check_login');


//=================================================================//
Route::get('/form_login', function () {
    $result = [
        'users' => []
    ];
    return view('page.form_login',$result);
});
Route::post('/form_login','PageController@form_login');
//================================================================//

Route::get('/form_loginSTD', function () {
    $data = ['username' => '',
            'name' => ''
];
    return view('page.form_login',$data);
});

Route::post('/form_loginSTD','PageController@form_loginSTD');//จะทำงานก็่อเมื่อเรากดปุ่ม submit

//================================================================//

// Route::get('/list_users', function (){
//     return view('page.list_user');
// });
Route::get('/list_users','UsersController@list_users');
Route::post('/list_users_find','UsersController@list_users_find');
//=================DELETE===============================================//
Route::get('delete_user/{id}', function ($id) {
    return 'User'.$id;
});
Route::get('/delete_user/{id}','UsersController@delete_users');
//================================================================//
Route::post('/form_registerSTD','UsersController@form_registerSTD');
//================================================================//

