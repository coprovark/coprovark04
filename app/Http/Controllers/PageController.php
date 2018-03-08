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
    
}