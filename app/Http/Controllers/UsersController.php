<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;//ใช้ในการเชื่อมฐานข้อมูล
use Illuminate\Http\Request;

class UsersController extends Controller
{ 
//show----------------------------------------------------------------------------------------------------//
    public function list_users()
    {
        $find = '';
        $show = DB::table('coprovark_04')->select('*')->get();
        return view('page.list_user',[
        'data_list' =>  $show,
        'find'      =>  $find
        ]);

    }

    //show_faculty---------------------//
    public function show_faculty()
    {
        $find = '';
        $show = DB::table('co_faculty')->select('*')->get();
        return view('page.show_faculty',[
        'co_list' =>  $show,
        'find'      =>  $find
        ]);

    }
    //show_register
    // public function show_register()
    // {
    //     $find = '';
    //     $show = DB::table('co_register')->select('*')->get();
    //     return view('page.show_register',[
    //     'data_list' =>  $show,
    //     'find'      =>  $find
    //     ]);

    // }
    //show_register
    public function show_register(){
        $find = '';        
        $show = DB::table('co_register')
        ->join('co_typeuser', 'co_register.co_typeuser', '=', 'co_typeuser.typeuser_code')
        ->join('co_titlename', 'co_register.co_titlename', '=', 'co_titlename.title_code')
        ->join('co_gender', 'co_register.co_gender', '=', 'co_gender.gender_code')
        ->join('co_institution', 'co_register.co_institution', '=', 'co_institution.institution_code')
        ->join('co_faculty', 'co_register.co_faculty', '=', 'co_faculty.faculty_code')
        ->select(
        'co_register.*', 
        'co_typeuser.typeuser_name',
        'co_titlename.title_name',
        'co_gender.gender_name',
        'co_institution.institution_name', 
        'co_faculty.faculty_name'
        )
            ->get();
        return view('page.show_register', [
           'data_list'=>$show,
           'id'=>1,
           'find'=>$find
        ]);
    }

    //fullshow
    public function fullshow_register(Request $req)
    {
        $find = $req->co_id; //รับค่าเก็บไว้ในตัวแปล
        $fullshow = DB::table('co_register')
        ->join('co_typeuser', 'co_register.co_typeuser', '=', 'co_typeuser.typeuser_code')
        ->join('co_titlename', 'co_register.co_titlename', '=', 'co_titlename.title_code')
        ->join('co_branch', 'co_register.co_branch', '=', 'co_branch.branch_code')
        ->join('co_faculty', 'co_register.co_faculty', '=', 'co_faculty.faculty_code')
        ->join('co_level', 'co_register.co_level', '=', 'co_level.level_code')
        ->join('co_institution', 'co_register.co_institution', '=', 'co_institution.institution_code')
        ->join('co_tpyestudent', 'co_register.co_tpyestudent', '=', 'co_tpyestudent.tpyestudent_code')
        ->join('co_style', 'co_register.co_style', '=', 'co_style.style_code')
        ->join('co_gender', 'co_register.co_gender', '=', 'co_gender.gender_code')
        ->join('co_status', 'co_register.co_status', '=', 'co_status.status_code')
        ->join('co_citizenship', 'co_register.co_citizenship', '=', 'co_citizenship.citizenship_code')
        ->join('co_nationality', 'co_register.co_nationality', '=', 'co_nationality.nationality_code')
        ->join('co_religion', 'co_register.co_religion', '=', 'co_religion.religion_code')
        ->select('co_register.*', 
        'co_typeuser.*', 
        'co_titlename.*',
        'co_branch.*',
        'co_faculty.*',
        'co_level.*',
        'co_institution.*',
        'co_tpyestudent.*',
        'co_style.*',
        'co_gender.*',
        'co_status.*',
        'co_citizenship.*',
        'co_nationality.*',
        'co_religion.*'
        )
         ->where('co_id','=',$find)
         ->get();
         return view('page.fullshow_register',[
        'fullshow' =>  $fullshow,
        // 'find'     =>  $find
         ]);   
         return $req;
    }
//endshow----------------------------------------------------------------------------------------------------//
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
    //searchCo_register
    public function findCo_register(Request $req)
    {
        $find = $req->find;
        $users = DB::table('co_register')
        ->join('co_titlename', 'co_register.co_titlename', '=', 'co_titlename.title_code')
        ->join('co_faculty', 'co_register.co_faculty', '=', 'co_faculty.faculty_code')
        ->select('co_register.*', 'co_titlename.title_name','co_faculty.faculty_name')
        ->where('co_no','=',$find)
        ->get();
        return view('page.show_register',[
        'data_list' =>  $users,
        'find'      =>  $find
        ]);      
    }

    //edit    
    public function list_user_edit(Request $req)
    {
        $find = $req->id; //รับค่าเก็บไว้ในตัวแปล
         $user = DB::table('coprovark_04')
         ->select('*')
         ->where('id','=',$find)
         ->get();
         return view('page.list_user_edit',[
        'user' =>  $user,
        // 'find'      =>  $find
         ]);   
         return $req;
    }
    //edit_register
     public function edit_register(Request $req)
    {
        $find = $req->co_id; //รับค่าเก็บไว้ในตัวแปล
        $typeuser       = DB::table('co_typeuser')->select('*')->get();
        $titlename      = DB::table('co_titlename')->select('*')->get();
        $branch         = DB::table('co_branch')->select('*')->get();
        $faculty        = DB::table('co_faculty')->select('*')->get();
        $level          = DB::table('co_level')->select('*')->get();
        $institution    = DB::table('co_institution')->select('*')->get();
        $tpyestudent    = DB::table('co_tpyestudent')->select('*')->get();
        $style          = DB::table('co_style')->select('*')->get();
        $gender         = DB::table('co_gender')->select('*')->get();
        $status         = DB::table('co_status')->select('*')->get();
        $citizenship    = DB::table('co_citizenship')->select('*')->get();
        $nationality    = DB::table('co_nationality')->select('*')->get();
        $religion       = DB::table('co_religion')->select('*')->get();

        $edit = DB::table('co_register')
        ->join('co_typeuser', 'co_register.co_typeuser', '=', 'co_typeuser.typeuser_code')
        ->join('co_titlename', 'co_register.co_titlename', '=', 'co_titlename.title_code')
        ->join('co_branch', 'co_register.co_branch', '=', 'co_branch.branch_code')
        ->join('co_faculty', 'co_register.co_faculty', '=', 'co_faculty.faculty_code')
        ->join('co_level', 'co_register.co_level', '=', 'co_level.level_code')
        ->join('co_institution', 'co_register.co_institution', '=', 'co_institution.institution_code')
        ->join('co_tpyestudent', 'co_register.co_tpyestudent', '=', 'co_tpyestudent.tpyestudent_code')
        ->join('co_style', 'co_register.co_style', '=', 'co_style.style_code')
        ->join('co_gender', 'co_register.co_gender', '=', 'co_gender.gender_code')
        ->join('co_status', 'co_register.co_status', '=', 'co_status.status_code')
        ->join('co_citizenship', 'co_register.co_citizenship', '=', 'co_citizenship.citizenship_code')
        ->join('co_nationality', 'co_register.co_nationality', '=', 'co_nationality.nationality_code')
        ->join('co_religion', 'co_register.co_religion', '=', 'co_religion.religion_code')
         ->select(
         'co_register.*',
         'co_typeuser.*',
         'co_titlename.*'
         )
          ->where('co_id','=',$find)
          ->get();
          return view('page.edit_register',[
          'edit'        =>  $edit,
          'titlename'   => $titlename,
          'typeuser'    => $typeuser,
          'branch'      => $branch,      
          'faculty'     => $faculty,       
          'level'       => $level,         
          'institution' => $institution,    
          'tpyestudent' => $tpyestudent,   
          'style'       => $style,         
          'gender'      => $gender,       
          'status'      => $status ,        
          'citizenship' => $citizenship,    
          'nationality' => $nationality,    
          'religion'    => $religion 
         //'find'      =>  $find
          ]);   
      return $req;
    }




    // ->join('co_typeuser', 'co_register.co_typeuser', '=', 'co_typeuser.typeuser_code')
    // ->join('co_titlename', 'co_register.co_titlename', '=', 'co_titlename.title_code')
    // ->join('co_branch', 'co_register.co_branch', '=', 'co_branch.branch_code')
    // ->join('co_faculty', 'co_register.co_faculty', '=', 'co_faculty.faculty_code')
    // ->join('co_level', 'co_register.co_level', '=', 'co_level.level_code')
    // ->join('co_institution', 'co_register.co_institution', '=', 'co_institution.institution_code')
    // ->join('co_tpyestudent', 'co_register.co_tpyestudent', '=', 'co_tpyestudent.tpyestudent_code')
    // ->join('co_style', 'co_register.co_style', '=', 'co_style.style_code')
    // ->join('co_gender', 'co_register.co_gender', '=', 'co_gender.gender_code')
    // ->join('co_status', 'co_register.co_status', '=', 'co_status.status_code')
    // ->join('co_citizenship', 'co_register.co_citizenship', '=', 'co_citizenship.citizenship_code')
    // ->join('co_nationality', 'co_register.co_nationality', '=', 'co_nationality.nationality_code')
    // ->join('co_religion', 'co_register.co_religion', '=', 'co_religion.religion_code')
    // ->select(
    // 'co_register.*', 
    // 'co_typeuser.typeuser_name', 
    // 'co_titlename.title_name',
    // 'co_branch.branch_name',
    // 'co_faculty.faculty_name',
    // 'co_level.level_name',
    // 'co_institution.institution_name',
    // 'co_tpyestudent.tpyestudent_name',
    // 'co_style.style_name',
    // 'co_gender.gender_name',
    // 'co_status.status_name',
    // 'co_citizenship.citizenship_name',
    // 'co_nationality.nationality_name',
    // 'co_religion.religion_name'
    // )
    //---------------------------------------------------------------------------








        //อัพเดทข้อมูล user
        public function list_user_update(Request $req){
            $sid        = $req->sid;
            $fullName   = $req->fullName;
            $username   = $req->username;
            $password   = $req->password;
            $data = [
                'fullName'=>$fullName,
                'username'=>$username,
                'password'=>$password,
            ];
            $status = DB::table('coprovark_04')
                        ->where('id', $sid)
                        ->update($data);
            return redirect('list_users');
        }
        //อัพเดท co_register
        public function updateCo_register(Request $req){
            $id = $req ->id;
            $update = [

                'co_date'        => $req->co_date,
                'co_typeuser'    => $req->co_typeuser ,
                'co_studencode'  => $req->co_studencode ,
                'co_idcard'      => $req->co_idcard ,
                'co_fullname'    => $req->co_fullname ,
                'co_titlename'   => $req->co_titlename ,
                'co_nickname'    => $req->co_nickname ,
                'co_branch'      => $req->co_branch ,
                'co_faculty'     => $req->co_faculty ,
                'co_level'       => $req->co_level ,
                'co_grade'       => $req->co_grade ,
                'co_institution' => $req->co_institution ,
                'co_tpyestudent' => $req->co_tpyestudent ,
                'co_style'       => $req->co_style,
                'co_birthday'    => $req->co_birthday,
                'co_age'         => $req->co_age ,
                'co_gender'      => $req->co_gender ,
                'co_weigth'      => $req->co_weigth ,
                'co_height'      => $req->co_height ,
                'co_blood'       => $req->co_blood ,
                'co_status'      => $req->co_status ,
                'co_nationality' => $req->co_nationality,
                'co_citizenship' => $req->co_citizenship ,
                'co_religion'    => $req->co_religion ,
                'co_peraddress'  => $req->co_peraddress ,
                'co_preaddress'  => $req->co_preaddress ,
                'co_phone'       => $req->co_mobile ,
                'co_email'       => $req->co_email ,
                'co_social'      => $req->co_social ,
                'co_website'      => $req->co_website,


            ];
            $status = DB::table('co_register')
                        ->where('co_id', $id)
                        ->update($update);
            return redirect('show_register');
        }


//delete
    public function delete_users($id)
    {
        DB::table('coprovark_04')->where('id', '=', $id)->delete();
        return redirect('list_users');
    }
        //deleteCo_register------------------------------------------------------------------------------------------------//
    public function deleteCo_register($id)
    {
        DB::table('co_register')->where('co_id', '=', $id)->delete();
        return redirect('show_register');
    }
    //------------------------------------------------------------------------------------------------//
    
//insert
    public function form_registerSTD(Request $req){
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
  //---------------co_register-----------------------------------------//
      public function co_register(Request $req){
        $status = DB::table('co_register')->insert(
          [      
            'co_no'             => $req->co_no,
            'co_date'           => $req->co_date,
            'co_typeuser'       => $req->co_typeuser ,
            'co_studencode'     => $req->co_studencode ,
            'co_idcard'         => $req->co_idcard ,
            'co_titlename'       => $req->co_titlename ,
            'co_fullname'       => $req->co_fullname ,
            'co_nickname'       => $req->co_nickname ,
            'co_branch'         => $req->co_branch ,
            'co_faculty'        => $req->co_faculty ,
            'co_level'          => $req->co_level ,
            'co_grade'          => $req->co_grade ,
            'co_institution'    => $req->co_institution ,
            'co_tpyestudent'    => $req->co_tpyestudent ,
            'co_style'          => $req->co_style,
            'co_birthday'       => $req->co_birthday,
            'co_age'            => $req->co_age ,
            'co_gender'         => $req->co_gender ,
            'co_weigth'         => $req->co_weigth ,
            'co_height'         => $req->co_height ,
            'co_blood'          => $req->co_blood ,
            'co_status'         => $req->co_status ,
            'co_nationality'    => $req->co_nationality,
            'co_citizenship'    => $req->co_citizenship ,
            'co_religion'       => $req->co_religion ,
            'co_peraddress'     => $req->co_peraddress ,
            'co_preaddress'     => $req->co_preaddress ,
            'co_phone'          => $req->co_phone ,
            'co_mobile'         => $req->co_mobile ,
            'co_email'          => $req->co_email ,
            'co_social'         => $req->co_social ,
            'co_website'        => $req->co_website
          ]
        );
        if($status){
           return redirect('show_register');
        }else{
           return "เกิดข้อผิดพลาด";
        }
       
      }
   //--------------------------------------------------------//



   public function co_faculty_show()
    {
        $find = '';
        $show = DB::table('co_faculty')->select('*')->get();
        return view('page.co_faculty_show',[
        'data_list' =>  $show,
        'find'      =>  $find
        ]);

    }




   

}//endclass