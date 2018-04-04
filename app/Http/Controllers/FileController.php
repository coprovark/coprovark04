<?php
namespace App\Http\Controllers;
use App\file;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FileController extends Controller{

    //แสดง
    public function show(){
        $query = DB :: table('co_file')->select('*')->get();
        return view('file.upload',[
       
            'datatable' => $query,
            'edit'      => [],
            'i' => 1
        ]);
    }
    //อัพโหด 
    public function upload(Request $req){

        $file = $req->file('uploadfile');
        $name = $req->uploadfilename;
        $randomeName = rand(1001,9999);
        if ($req->hasFile('uploadfile')) {

            $type = $req->uploadfile->extension();
            $namefile =  $randomeName.'.'.$type;
            $size = $file->getClientSize();
            DB::table('co_file')->insert(
                [
                    'FileName' => $name, 
                    'FileType' => $type, 
                    'FilePath' => $namefile, 
                    'FileSize' => round($size/1024,2), // -> KB 
                ]
            );
 
            $file->move('upload',$namefile);
            echo "upload success";
            return redirect('upload1');
        }
    }
    //ดาวน์โหลด
    public function dl(Request $req){
        return response()->download('upload/'.$req->path,$req->name);
    }
    //ลบ
    public function rm(Request $req){
        $query = DB::table('co_file')->where('ID','=',$req->ID)->get();
        foreach($query as $row){
            if(unlink('upload/'.$row->FilePath)){
                DB::table('co_file')->where('ID','=',$req->ID)->delete();
            }
        }
        return redirect('upload1');
    }
    //แก้ไข
    public function ed(Request $req){
        $query = DB::table('co_file')->select('*')->get();
        $edit  = DB::table('co_file')->select('*')->where('ID','=',$req->ID)->get();
        return view('file.upload',[
            'datatable' => $query,
            'edit'      => $edit,
            'i'         => 1
        ]);
    }
    //อัพเดท
    public function update1(Request $req){
        $file = $req->file('uploadfile');
        $name = $req->uploadfilename;
        $randomeName = rand(1001,9999);
        if ($req->hasFile('uploadfile')) {
            $type = $req->uploadfile->extension();
            $namefile =  $randomeName.'.'.$type;
            $size = $file->getClientSize();
            DB::table('co_file')
                ->where('ID', $req->ID)
                ->update(
                [
                    'FileName' => $name, 
                    'FileType' => $type, 
                    'FilePath' => $namefile, 
                    'FileSize' => round($size/1024,2), // -> MB 
                ]
            );
            $file->move('upload',$namefile);
            echo "upload success";
            return redirect('upload1');     
        }else{

            DB::table('co_file')
                    ->where('ID', $req->ID)
                    ->update([
                        'FileName'   => $req->uploadfilename
                    ]);
            return redirect('upload1'); 
        }
    }
//GALLERY=========================================================//
//insertGallery BUG ชื่อซ้ำกัน error 
//ชือ Gallery ต้องเป็นภาษาอังกฤษ
public function insertGallery(Request $req){
        $file = $req->input('Gallery_name');
        mkdir("C:/xampp/htdocs/webapp/upload00/public/$file");  
        $status = DB::table('foldergallery')->insert(
          [      
            'Gallery_name'       => $req->Gallery_name,
            'Gallery_CreateDate' => $req->Gallery_CreateDate,
            'Gallery_UpdateDate' => $req->Gallery_UpdateDate
            
          ]
        );
        return redirect('show_Gallery');
        
       
}
//showGallery
public function showGallery(Request $req){
    $id = $req ->ID; //ลิงเนมมาจากหน้าไอดี    
        $select = DB :: table('picture')->select('*')->get();
        $show = DB :: table('foldergallery')->select('*')->get();
        return view('page.show_Gallery',[
            'showgallery' => $show,
            'showidfile' => $select,
            'i' => 1,
        ]);
}
//ลบGallery
public function deleteGallery(Request $req){
    $deletegallery =    DB::table('foldergallery')
                        ->select('*')
                        ->where('Gallery_id','=',$req->Gallery_id)
                        ->get();
                
    $deletefile =    DB::table('foldergallery')
                    ->join('picture', 'foldergallery.Gallery_name', '=', 'picture.Gallery_name')
                    ->select('picture.*')
                    ->where('Gallery_id','=',$req->Gallery_id)
                    ->get();
  
    foreach($deletegallery as $gallry){
        foreach($deletefile as $file ){
        unlink('C:/xampp/htdocs/webapp/upload00/public/'.$gallry->Gallery_name.'/'.$file ->picture_Path);
        $deletefiles = DB::table('picture')
        ->where('picture_id','=',$file->picture_id)
        ->delete();
        }
        rmdir("C:/xampp/htdocs/webapp/upload00/public/".$gallry->Gallery_name);  
    }
     DB::table('foldergallery')
    ->where('Gallery_id','=',$req->Gallery_id)
    ->delete();
    return redirect('show_Gallery');
}
//แก้ไขGallery
public function editGallery(Request $req){
    $find = $req->Gallery_id; //รับค่าเก็บไว้ในตัวแปล
    $edit  = DB::table('foldergallery')->select('*')
    ->where('Gallery_id','=',$find)
    ->get();
    // 
    return view('page.editGallery',[
        // 'show' => $query,
        'edit' => $edit,
    ]);
}
//อัพเดทGallery
public function Update_Gallery(Request $req){
    $id = $req ->ID; //ลิงเนมมาจากหน้าไอดี
    $file = $req->input('Gallery_name'); 

    $show = DB :: table('foldergallery')->select('Gallery_name')->where('Gallery_id', $id)->get();
   
    $select  = DB::table('foldergallery')
    ->join('picture', 'foldergallery.Gallery_name', '=', 'picture.Gallery_name')
    ->select('foldergallery.*', 'picture.*')
    ->where('Gallery_id','=',$id)
    ->get();
    foreach($show as $list){
        rename("C:/xampp/htdocs/webapp/upload00/public/".$list->Gallery_name , "C:/xampp/htdocs/webapp/upload00/public/$file");
        }
    
        foreach($select as $show){
        $idfile = $show->picture_id;
    }
    $update = [
        'Gallery_name'       => $req->Gallery_name,
        'Gallery_UpdateDate' => $req->Gallery_UpdateDate
    ];
    $update2 = [
        'Gallery_name'       => $file
    ];
    $status = DB::table('foldergallery')
                ->where('Gallery_id', $id)
                ->update($update);

    $status2 = DB::table('picture')
                ->where('picture_id', $idfile)
                ->update($update2);
    return redirect('show_Gallery');
}

//////////////////////////////////-------------------------------//////////////////////////////////////////
//ลบแบบcheckbox
public function deleteItem(Request $req){
        $item = $req->param;
        foreach ($item as $value) {
            $query = DB::table('co_file')->where('ID','=',$value)->get();
            foreach($query as $row){
                if(@unlink('upload/'.$row->FilePath)){
                    DB::table('co_file')->where('ID','=',$value)->delete();
                }
            }
        }
        return response()->json($item);
}
//////////////////////////////////-------------------------------//////////////////////////////////////////

//อัพโหด file
 public function insertFileGallery(Request $req){
    $name = $req->Gallery_name; //รับค่าเก็บไว้ในตัวแปล
    $select  = DB::table('foldergallery')->select('Gallery_name')
    ->where('Gallery_name','=',$name)
    ->get();

    $file = $req->file('uploadfile');
    $name = $req->uploadfile;
    $randomeName = rand(1001,9999);
    if ($req->hasFile('uploadfile')) {
        $type = $req->uploadfile->extension();
        $namefile =  $randomeName.'.'.$type;
        $size = $file->getClientSize();
        $nameOriginal = $file->getClientOriginalName();
        DB::table('picture')->insert(
            [
                'picture_name' => $randomeName, 
                'picture_OriginalName' => $nameOriginal,
                'picture_CreateDate' => $req->picture_CreateDate,
                'picture_UpdateDate' => $req->picture_UpdateDate,
                'picture_Type' => $type,   
                'picture_Size' => round($size/1024,2), // -> KB 
                'picture_Path' => $namefile,
                'Gallery_name' => $req->Gallery_name,
            ]
        );
    foreach($select as $list){
    $file->move($list->Gallery_name,$namefile);
    }
        // echo "upload success";
        return redirect('show_File');
    }//if
    return view('page.insertFileGallery',[
        // 'show' => $query,
        'show' => $select,
    ]);
}
//showFilefull
public function show_File(Request $req){
    $select = DB :: table('picture')->select('*')->get();
    $show = DB :: table('foldergallery')->select('*')->get();
    return view('page.show_File',[
        'showgallery' => $show,
        'showidfile' => $select,
        'i' => 1,
    ]);
}
//viewFile
public function view_file(Request $req){
    $find = $req->Gallery_id; //รับค่าเก็บไว้ในตัวแปล
    $show = DB :: table('foldergallery')->select('*') ->where('Gallery_id','=',$find)->get();
    $select  = DB::table('foldergallery')
    ->join('picture', 'foldergallery.Gallery_name', '=', 'picture.Gallery_name')
    ->select('foldergallery.*', 'picture.*')
    ->where('Gallery_id','=',$find)
    ->get();
    return view('page.view_fileGallery',[
        'list' => $select,
        'show' => $show,
        'i' => 1,
    ]);
}
//edit_file
public function edit_file(Request $req){
    $find = $req->picture_id; //รับค่าเก็บไว้ในตัวแปล
    $edit  = DB::table('picture')->select('*')
    ->where('picture_id','=',$find)
    ->get();
    // 
    return view('page.edit_file',[
        // 'show' => $query,
        'edit' => $edit,
    ]);
}
//updateFile
public function update_file(Request $req){
    $id = $req->picture_id;

    $file = $req->file('uploadfile');
    $randomeName = rand(1001,9999);
        if ($req->hasFile('uploadfile')) {
            // $queryG = DB::table('foldergallery')->where('Gallery_id','=',$req->Gallery_id)->get();
            $query = DB::table('picture')
            // ->join('foldergallery', 'picture.Gallery_name', '=', 'foldergallery.Gallery_name')
            // ->select('foldergallery.*', 'picture.*')
            ->where('picture_id','=', $id)
            ->get();
            // foreach($query as $row){
            //     $foldername = $row->Gallery_name;
            // }
            foreach($query as $row){
                 unlink('C:/xampp/htdocs/webapp/upload00/public/'.$row->Gallery_name.'/'.$row->picture_Path);
            }//ลบรูปเดิมทิ้ง
            $type = $req->uploadfile->extension();
            $namefile =  $randomeName.'.'.$type;
            $size = $file->getClientSize();
            $nameOriginal = $file->getClientOriginalName();
            
            DB::table('picture')
                ->where('picture_id',$id)
                ->update(
                    [
                        'picture_name' => $randomeName, 
                        'picture_OriginalName' => $req->picture_OriginalName, 
                        'picture_UpdateDate' => $req->picture_UpdateDate,
                        'picture_Type' => $type,   
                        'picture_Size' => round($size/1024,2), // -> KB 
                        'picture_Path' => $namefile,
                    ]);
            foreach($query as $row){
            $file->move($row->Gallery_name,$namefile);//เพิ่มรูปใหม่
            }
            return redirect('show_File'); 
        }else{ 
    $status = DB::table('picture')
                ->where('picture_id', $id)
                ->where('picture_id', $req ->picture_id)
                ->update(
                    [
                        'picture_OriginalName' => $req->picture_OriginalName, 
                        'picture_UpdateDate' => $req->picture_UpdateDate
                    ]
                );
            // $file->move('pic',$req->picture_Path);
            return redirect('show_File'); 
        }
}
//ลบไฟล์
public function deletefile(Request $req){
    $id = $req->picture_id;
    
    // $query = DB::table('picture')->where('ID','=',$req->ID)->get();
    // foreach($query as $row){
        
    // }
    $query = DB::table('picture')->where('picture_id','=',$id)->get();
    DB::table('picture')->where('picture_id','=',$id)->delete();
    foreach($query as $row){
        unlink('C:/xampp/htdocs/webapp/upload00/public/'.$row->Gallery_name.'/'.$row->picture_Path);      
    }
    return redirect('show_File');
}
//ค้นหา 2 ตาราง
public function find_Gallery(Request $req){
        $find = $req->find;
        $list = DB::table('foldergallery')
        ->select('*')
        ->where('Gallery_name','like',"%$find%")
        ->get();
        return view('page.show_Gallery',[
        'showgallery' =>  $list,
        'find'        =>  $find,
        'i'           => 1,
        ]);      
    }
    public function find_File(Request $req)
    {
        $find = $req->find;
        $list = DB::table('picture')
        ->select('*')
        ->where('picture_OriginalName','like',"%$find%")
        ->get();
        return view('page.show_File',[
        'showidfile' =>  $list,
        'show'       =>  $list,
        'find'       =>  $find,
        'i'          => 1,
        ]);      
}
//ดาวน์โหลด
public function download(Request $req){
    $id = $req->picture_id;
    $query = DB::table('picture')
    ->select('*')
    ->where('picture_id','=',$id)
    ->get();
    foreach($query as $row)
    {
        return response()->download('C:/xampp/htdocs/webapp/upload00/public/'.$row->Gallery_name.'/'.$row->picture_Path);
}    
}//ดูรูปขนาดเต็ม
public function view_picture(Request $req){
    $id = $req->picture_id;
    $query = DB::table('picture')
    ->select('*')
    ->where('picture_id','=',$id)
    ->get();
    return view('page.view_picture',[
        'list' => $query,
    ]);  
}





} // end class
?>