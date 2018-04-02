@extends('layouts.main')
@section('content')

<form class="form-group" action="/insertGallery" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="row">
        <div class="col-md-4" style="margin-top : 30px">
            <div class="form-group">
                <h1><b>CREATE GALLERY</b></h1>
            </div>
        </div>
        <div class="col-md-8" style="margin-top : 50px">
            <div class="row">
                    <div class="col-md-2">
                    <label>ชื่อ Gallery : </label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-group" style="width:300px;height:30px" name="Gallery_name" type="text" ><br>
                    </div>  
            </div>
            <div class="row">
                    <div class="col-md-2">
                    <label>วันที่สร้าง : </label>
                    </div>
                    <div class="col-md-10">
                        <input class="form-group" style="width:300px;height:30px" name="Gallery_CreateDate" type="text" value="{{date("Y-m-d")}}" readonly><br>
                        <input class="form-group" style="width:300px;height:30px" name="Gallery_UpdateDate" type="hidden" value="{{date("Y-m-d")}}"/><br>
                    </div>  
            </div> 
           
                       
                
</div> 

                    <center style="margin-top : 200px;">
                        <input class="btn btn-success" type="submit" value="สร้างโพร์เดอร์">
                        <a class="btn btn-danger" href="/">ยกเลิก</a>
                    </center>
         
            </div>
        </div>      
    </div>
</div>
</form> 


@endsection
