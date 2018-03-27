@extends('layouts.main')
@section('content')
        <div class="container-fluid" style="font-size:20px;background-color:#ffff66;border:1px solid black;border-radius: 15px 15px 0px 0px;">
                <b class="fa fa-paste"> || สมัครสมาชิก</b>
        </div>
        <div class="container-fluid" style="border:1px solid black;border-radius: 0px 0px 15px 15px;"> 
        <div class="container" style="font-size : 15px;padding:30px 30px 30px 30px"> 
                <form action="/co_main_register" method="post">

                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_tpyeUser</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="radio" name="main_tpyeUser" value="1" required> นักเรียน&nbsp;
                                        <input type="radio" name="main_tpyeUser" value="2" required> นักศึกษา&nbsp;
                                        <input type="radio" name="main_tpyeUser" value="3" required> ครู/อาจารย์
                                        </div>
                                </div>
                        </div> 
                        </div>
                        <br>  
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_studentCode</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="text" name="main_studentCode" class="form-control" id="exampleInputPassword1" placeholder="main_studentCode" style="width :20%" required>
                                        </div>
                                </div>
                        </div>
                        </div>
                        <br>   
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_IDcard</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="text" name="main_IDcard" class="form-control" id="exampleInputPassword1" placeholder="main_IDcard" style="width :20%" required>
                                        </div>
                                </div>
                        </div>
                        </div>
                        <br>   
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_titleName</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                        <select class="form-control" name="main_titleName" style="width:10.5%">
                                                <option value="1">นาย</option>
                                                <option value="2">นาง</option>
                                                <option value="3">นางสาว</option>
                                        </select>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br>
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_name</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_name" name="main_name" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br> 
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_nickname</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_nickname" name="main_nickname" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br>   
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_grade</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_grade" name="main_grade" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br>      
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_birthday</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="date" id="date" onchange="calAge(this);" class="form-control" placeholder="main_birthday" name="main_birthday" style="width:20%" required>
                                        </div>
                                </div>          
                        </div>
                        </div>
                        <br>
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_age</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="text" id="age" name="main_age" class="form-control" placeholder="main_age" style="width:10%">
                                        </div>
                                </div>          
                        </div>
                        </div>
                        <br>
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_weigth</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_weigth" name="main_weigth" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br> 
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_height</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_height" name="main_height" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br> 
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_perAddress</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                                <textarea name="addrmain_perAddressess" class="form-control" style="width :70%;height:100px;" placeholder="main_perAddress" required></textarea>
                                        </div>
                                </div>
                        </div>
                        </div> 
                        <br>
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_preAddress</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                                <textarea name="main_preAddress" class="form-control" style="width :70%;height:100px;" placeholder="main_preAddress" required></textarea>
                                        </div>
                                </div>
                        </div>
                        </div> 
                        <br>
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_phone</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_phone" name="main_phone" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br> 
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_mobile</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_mobile" name="main_mobile" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br> 
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_email</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_email" name="main_email" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br> 
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_facebook</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_facebook" name="main_facebook" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br> 
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>main_website</label>
                                </div>
                                <div class="col-md-10" style="">
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                                <input type="text" class="form-control" placeholder="main_website" name="main_website" style="width:20%" required>
                                        </div>
                                </div>
                                </div> 
                        </div>
                        </div> 
                        <br> 
                        
                        <center>
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                                <a type="button" href="/co_main_register" class="btn btn-danger">ยกเลิก</a>                      
                        </center>            
                </form>
        </div>
        </div> <!---divend -->	
<br>
<br>	
		

@endsection