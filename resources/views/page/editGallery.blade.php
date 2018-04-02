@extends('layouts.main')
@section('content')
@foreach($edit as $list)
<form class="form-group" action="/Update_Gallery" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="row">
        <div class="col-md-4" style="margin-top : 30px">
            <div class="form-group">
                <h1><b>EDIT GALLERY</b></h1>
            </div>
        </div>
        <div class="col-md-8" style="margin-top : 50px">
            <div class="row">
                    <div class="col-md-2">
                    <label>ชื่อ Gallery : </label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-group" style="width:300px;height:30px" name="Gallery_name" type="text" value="{{$list->Gallery_name}}" ><br>
                    </div>  
            </div>
            <div class="row">
                    <div class="col-md-2">
                    <label>วันที่สร้าง : </label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-group" style="width:300px;height:30px" name="Gallery_CreateDate" type="text" value="{{$list->Gallery_CreateDate}}" readonly><br>
                    </div>  
            </div> 
            <div class="row">
                    <div class="col-md-2">
                    <label>วันที่ปรับปรุง : </label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-group" style="width:300px;height:30px" name="Gallery_UpdateDate" type="text" value="{{date("Y-m-d")}}" readonly><br>
                    </div>  
            </div> 
           
                       
                
</div> 

                    <center style="margin-top : 200px;">
                    <input name="ID" type="text" value="{{$list->Gallery_id}}" hidden >
                        <input class="btn btn-success" type="submit" value="บันทึก">
                        <a class="btn btn-danger" href="/">ยกเลิก</a>
                    </center>
         
            </div>
        </div>      
    </div>
</div>
</form> 
@endforeach

@endsection
