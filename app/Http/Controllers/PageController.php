<?php

namespace App\Http\Controllers; //บอกตำแหน่ง

use App\Page; //use ดึงสคิป ต่างๆ

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class PageController extends Controller //extends สืบทอดคุณสมบัติ
{
    public function show(Request $request)
    {
        $txt_name = $request->input('name');
        $txt_hidden = $request->input('hidden');
        $txt_radio = $request->input('radio');
        $txt_checkbox = $request->input('checkbox');


        $array=[ "NAME" => $txt_name,
                 "ID" => $txt_hidden,
                 "GAIN" => $txt_radio,
                 "XXX" => $txt_checkbox

        ];
       
        // echo "ชื่อ : ".$txt_name."<br>"."เพศ : ".$txt_radio."<br>"."รหัส : ".$txt_hidden."<br>".$txt_checkbox;
     
       return view('page.page1',$array);
    }

    public function show2(Request $request)
    {
        $txt_name = $request->input('name');
        $txt_pass = $request->input('password');
        $txt_select = $request->input('select');
        $txt_area = $request->input('area');


        $array1=[
        "NAM"  => $txt_name,
        "PASS"  => $txt_pass,
        "SELEC" => $txt_select,
        "AREA"  => $txt_area

];
return view('page.page3',$array1);
    }

    public function show3(Request $request)
    {
        $txt_username = $request->input('user');
        $txt_password = $request->input('pass');

        $data=[ "USERNAME" => $txt_username,
                 "PASS" => $txt_password
        ];
       return view('page.form_login',$data);
    }
    
}