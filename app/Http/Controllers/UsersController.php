<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;//ใช้ในการเชื่อมฐานข้อมูล
use Illuminate\Http\Request;

class UsersController extends Controller
{ 
//show
    public function list_users()
    {
        $find = '';
        $show = DB::table('coprovark_04')->select('*')->get();
        return view('page.list_user',[
        'data_list' =>  $show,
        'find'      =>  $find
        ]);

    }

//search    
    public function list_users_find(Request $req)
    {
        $find = $req->find;
        $users = DB::table('coprovark_04')
        ->select('*')
        ->where('id','=',$find)
        ->get();
        return view('page.list_user',[
        'data_list' =>  $users,
        'find'      =>  $find
        ]);      
    }


//delete
    public function delete_users($id)
    {
        DB::table('coprovark_04')->where('id', '=', $id)->delete();
        return redirect('list_users');
    }
    
//insert
    public function form_registerSTD(Request $req){
        //  if('food1' == '') { $food1=0 ;}else echo  $food1=1;
        $status = DB::table('coprovark_04')->insert(
          [      
            'sid'       => $req->sid,
            'titleName' => $req->titleName,
            'fullName'  => $req->fullName ,
            'gender'    => $req->gender ,
            'birthDay'  => $req->birthDay ,
            'facultyID' => $req->facultyID ,
            'majorID'   => $req->majorID ,
            'address'   => $req->address ,
            'mobile'    => $req->mobile ,
            'food1'     => $req->food1 ,
            'food2'     => $req->food2 ,
            'food3'     => $req->food3 ,
            'food4'     => $req->food4 ,
            'username'  => $req->username,
            'password'  => $req->password
          ]
        );
        if($status){
           return redirect('list_users');
        }else{
           return "เกิดข้อผิดพลาด";
        }
       
      }
   //--------------------------------------------------------//

}//endclass