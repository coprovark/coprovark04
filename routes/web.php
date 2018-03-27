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


Route::get('/list_users','UsersController@list_users');
//=================DELETE===============================================//
Route::get('delete_user/{id}', function ($id) {
    return 'User'.$id;
});
//==================delete_user==============================================//
Route::get('/delete_user/{id}','UsersController@delete_users');
//======================form_registerSTD==========================================//
Route::post('/form_registerSTD','UsersController@form_registerSTD');
//======================list_user_edit==========================================//
Route::get('/list_user_edit/{id}','UsersController@list_user_edit');
//===========================list_user_update=====================================//
Route::post('/list_user_update','UsersController@list_user_update');








//===========================faculty=====================================//

Route::get('/show_faculty','UsersController@show_faculty');
Route::post('/show_faculty','UsersController@show_faculty');


//========================================================================//


















//===================เรียกหน้า=============================================//
Route::get('/co_main_show', function () {
    return view('page.co_main_show');
});
Route::get('/co_main_register', function () {
    return view('page.co_main_register');
});
//===================เรียกหน้า=============================================//

Route::get('/co_blood_show', function () {
    return view('page.co_blood_show');
});
Route::get('/co_blood_register', function () {
    return view('page.co_blood_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_branch_show', function () {
    return view('page.co_branch_show');
});
Route::get('/co_branch_register', function () {
    return view('page.co_branch_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_citizenship_show', function () {
    return view('page.co_citizenship_show');
});
Route::get('/co_citizenship_register', function () {
    return view('page.co_citizenship_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_faculty_show', function () {
    return view('page.co_faculty_show');
});
Route::get('/co_faculty_register', function () {
    return view('page.co_faculty_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_gender_show', function () {
    return view('page.co_gender_show');
});
Route::get('/co_gender_register', function () {
    return view('page.co_gender_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_institution_show', function () {
    return view('page.co_institution_show');
});
Route::get('/co_institution_register', function () {
    return view('page.co_institution_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_level_show', function () {
    return view('page.co_level_show');
});
Route::get('/co_level_register', function () {
    return view('page.co_level_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_nationality_show', function () {
    return view('page.co_nationality_show');
});
Route::get('/co_nationality_register', function () {
    return view('page.co_nationality_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_religion_show', function () {
    return view('page.co_religion_show');
});
Route::get('/co_religion_register', function () {
    return view('page.co_religion_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_status_show', function () {
    return view('page.co_status_show');
});
Route::get('/co_status_register', function () {
    return view('page.co_status_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_style_show', function () {
    return view('page.co_style_show');
});
Route::get('/co_style_register', function () {
    return view('page.co_style_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_titlename_show', function () {
    return view('page.co_titlename_show');
});
Route::get('/co_titlename_register', function () {
    return view('page.co_titlename_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_tpyestudent_show', function () {
    return view('page.co_tpyestudent_show');
});
Route::get('/co_tpyestudent_register', function () {
    return view('page.co_tpyestudent_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_typeuser_show', function () {
    return view('page.co_typeuser_show');
});
Route::get('/co_typeuser_register', function () {
    return view('page.co_typeuser_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_user_show', function () {
    return view('page.co_user_show');
});
Route::get('/co_user_register', function () {
    return view('page.co_user_register');
});
//===================เรียกหน้า=============================================//
Route::get('/co_register', function () {
    return view('page.co_register');
});
Route::get('/co_register', function () {
    return view('page.co_register');
});


//===================show_register=============================================//
Route::get('/show_register', function () {
    return view('page.show_register');
});
Route::get('/show_register','UsersController@show_register');
Route::post('/show_register','UsersController@show_register');
//fullshow
Route::get('/fullshow_register', function () {
    return view('page.fullshow_register');
});
Route::get('/ffullshow_register', function () {
    return view('page.ffullshow_register');
});
Route::get('/fullshow_register/{co_id}','UsersController@fullshow_register');
// Route::get('/show_register','UsersController@co_show');

//register
Route::post('/co_register','UsersController@co_register');


//deleteCoregister
Route::get('deleteCo_register/{co_id}', function ($id) {
    return 'User'.$id;
});
Route::get('/deleteCo_register/{co_id}','UsersController@deleteCo_register');

//ค้นหา
Route::post('/findCo_register','UsersController@findCo_register');

//แก้ไข
Route::get('/edit_register', function () {
    return view('page.edit_register');
});
Route::get('/edit_register/{co_id}','UsersController@edit_register');

//อัพเดทco_register
Route::post('/updateCo_register','UsersController@updateCo_register');
