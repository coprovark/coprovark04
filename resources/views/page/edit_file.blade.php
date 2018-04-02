@extends('layouts.main')
@section('content')


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
@foreach($edit as $show)
<form class="form-group" action="/update_file/{{$show->picture_id}}" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="row">
        <div class="col-md-5" style="">
            <div class="form-group">
                <center><h1><b>EDIT FILE</b></h1></center>
                <center>
                <div class="col-md-12" style="" >
                                <div class="form-group"style="float:center;margin-top:10px;">
                                
                                <img id="view" src="{{asset("$show->Gallery_name/".$show->picture_Path) }}" width="100%" height="100%">
        
                                </div>
                        </div>
                </center>
            </div>
        </div>
        <div class="col-md-7" style="margin-top : 50px">
        <div style="margin-top:50px;">
            <div class="row" >
                    <div class="col-md-3">
                    <label>ชื่อไฟล์ : </label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-group" style="width:300px;height:30px" name="picture_OriginalName" type="text" value="{{$show->picture_OriginalName}}" placeholder=""> กรุณาใส่ .{{$show->picture_Type}} ต่อท้ายชื่อ<br>
                    </div>  
            </div>
            <div class="row" >
                    <div class="col-md-3"><br>
                        <label>เลือกไฟล์ : </label>
                    </div>
                    <div class="col-md-9"><br>
                        <input class="form-group" id="pathphoto" style="width:300px;height:30px" name="uploadfile" type="file" accept="image/*" ><br>
                    </div>  
            </div>
            <div class="row">
                    <div class="col-md-3">
                    <label>วันที่ปรับปรุง : </label>
                    </div>
                    <div class="col-md-9">
                        <input class="form-group" style="width:300px;height:30px" name="picture_UpdateDate" type="text" value="{{date("Y-m-d")}}" readonly/><br>
                    
                            
                        <input style="float : letf;" class="btn btn-success" type="submit" value="อัพโหลด">
                        <a class="btn btn-danger" href="/">ยกเลิก</a>
                    </div>  
            </div>  
         </div>              
    </div>     
            </div>
        </div>      
</form> 
@endforeach

@endsection
