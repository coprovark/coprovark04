<?php

namespace App\Http\Controllers; //บอกตำแหน่ง

use App\Page; //use ดึงสคิป ต่างๆ
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;//ใช้ในการเชื่อมฐานข้อมูล

class PageController extends Controller //extends สืบทอดคุณสมบัติ
{
    public function show1(Request $request)
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

    public function form_check_login(Request $req)
    {
        
        $users = DB::select('select * from users where username = ? and password = ?' , 
                             [$req['username'],$req['password']]
                           );
    
                           return View('page.form_check_login',['users'=>$users]);
    }


    public function form_login(Request $req)
    {    
        $txt_username = $req->input('username');
        $txt_password = $req->input('password');
        $users = DB::select('select * from users where username = ? and password = ?' , 
        [$req['username'],$req['password']]);   
        foreach($users as $value){
            if($txt_username == $value->username && $txt_password == $value->password){
               // $data['status'] = "true";
            }
        }
            return View('page.form_login',['users'=>$users]);
    }
    
   // form_loginSTD=================================================//
   public function form_loginSTD(Request $req){
    $users = DB::table('coprovark_04')->where([
        ['username','=',$req['username']],
        ['password','=',$req['password']]
    ])->get();
        $status = "Username หรือ Password ไม่ถูกต้องค่ะ...";
    foreach($users as $result){
        $status = $result="Login สำเร็จค่ะ...";
        }
            $req ['name'] = $status;
    return view('page.form_login',$req);
   }
   //--------------------------------------------------------//

















   
}//endCLASS