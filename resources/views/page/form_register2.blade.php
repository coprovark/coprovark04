@extends('layouts.main')
@section('content')
<div class="container-fluid" style="font-size:20px;background-color:yellow;border:1px solid black;border-radius: 15px 15px 0px 0px;">
        <b class="fa fa-paste"> || สมัครสมาชิก</b>
</div>
<div class="container-fluid" style="border:1px solid black;border-radius: 0px 0px 15px 15px;"> 
<div class="container" style="font-size : 15px;padding:30px 30px 30px 30px"> 
        <form action="/form_register2" method="post">

        <!-- <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" placeholder="ใส่ id" name="id" style="width:70%">
        </div>   -->

        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                        <label>รหัสนักศึกษา</label>
                </div>
                <div class="col-md-10" style="">
                <div class="form-group">
                        <input type="number" class="form-control" placeholder="รหัสนักศึกษา" name="sid" style="width:70%" required>
                </div> 
                </div>

        </div>
        </div>
        <br>
        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                        <label>ชื่อ-นามสกุล</label>
                </div>
                <div class="col-md-10" style="">
                <div class="form-group">
                        <div class="form-inline" style="width:100%">
                        <select class="form-control" name="titleName" style="width:10.5%">
                                <option value="1">นาย</option>
                                <option value="2">นาง</option>
                                <option value="3">นางสาว</option>
                        </select>
                                <input type="text" class="form-control" placeholder="ชื่อ" name="fullName" style="width:58.5%" required>
                        </div>
                </div>
                </div> 
        </div>
        </div>
        
        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                         <label>เพศ</label>
                </div>
                <div class="col-md-10" style="">
                        <div class="form-group">
                              <input type="radio" name="gender" value="1" required> ชาย&nbsp;<br>
                              <input type="radio" name="gender" value="2" required> หญิง&nbsp;<br>
                              <input type="radio" name="gender" value="3" required> เพศทางเลือก
                        </div>
                </div>
        </div> 
        </div>
        <br>
        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                         <label>วัน เดือน ปีเกิด</label>
                </div>
                <div class="col-md-4" style="">
                        <div class="form-group">
                        <input type="date" id="date" onchange="calAge(this);" class="form-control" placeholder="วว//ดด/ปปปป" name="birthDay" style="width:50%" required>
                        </div>
                </div>
                <div class="col-md-1" style="text-align:center;">
                         <label>อายุ(ปี)</label>
                </div>
                <div class="col-md-5" style="">
                        <div class="form-group">
                        <input type="text" id="age" class="form-control" placeholder="อายุ" style="width:38%">
                        </div>
                </div>          
        </div>
        </div>
        <br>
        
        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                         <label>สังกัดคณะ</label>
                </div>
                <div class="col-md-10" style="">
                        <div class="form-group">
                                <select  class="form-control" name="facultyID" style="width:70%">
                                    <option value="01">วิทยาการคอมพิวเตอร์</option>
                                </select>       
                        </div>
                </div>        
        </div>
        </div>
        <br>
        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                         <label>สาขาวิชา</label>
                </div>
                <div class="col-md-10" style="">
                        <div class="form-group">
                              <input type="radio" name="majorID" value="01" required> วิทยาการคอมพิวเตอร์ &nbsp;<br>
                              <input type="radio" name="majorID" value="02" required> มัลติมีเดียและแอนิเมชั่น &nbsp;<br>
                              <input type="radio" name="majorID" value="03" required> วิศวะกรรมซอฟแวร์ &nbsp;<br>
                              <input type="radio" name="majorID" value="04" required> เทคโนโลยีและสารสนเทศ 
                        </div>
                </div>
        </div>
        </div>
        <br>
        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                         <label>ที่อยู่ปัจจุบัน</label>
                </div>
                <div class="col-md-10" style="">
                        <div class="form-group">
                                <textarea name="address" class="form-control" style="width :70%;height:100px;" placeholder="ใส่ที่อยู่" required></textarea>
                        </div>
                </div>
        </div>
        </div> 
        <br>
        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                         <label>เบอร์โทรศัพท์</label>
                </div>
                <div class="col-md-10" style="">
                        <div class="form-group">
                              <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="ใส่เบอร์โทร" style="width :70%" required>
                        </div>
                </div>
        </div>
        </div>
        <br>
        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                         <label>รายการงานอดิเรก</label>
                </div>
                <div class="col-md-10 " style="">
                        <input type="checkbox" name="food1" value="1">การ์ตูน &nbsp;<br>
                        <input type="checkbox" name="food2" value="1">เล่นเกม &nbsp;<br>
                        <input type="checkbox" name="food3" value="1">อ่านหนังสือ &nbsp;<br>
                        <input type="checkbox" name="food4" value="1">เล่นกีฬา
                </div>
        </div>
        </div> 
        <br>
        <hr>
        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                        <label>User name</label>
                </div>
                <div class="col-md-10" style="">
                        <div class="form-group">                           
                                <input type="text" class="form-control"placeholder="ใส่ User" name="username" style="width :70%" required>
                        </div>
                </div>
        </div>
        </div> 
        <br> 

        <div class="container">
        <div class="row">
                <div class="col-md-2" style="">
                        <label>Password</label>
                </div>
                <div class="col-md-10" style="">
                <div class="form-group">                           
                        <input type="password" class="form-control"placeholder="ใส่ Password" name="password" style="width :70%" required>                        
		</div>
                </div>
        </div>
        </div>
        <hr>
        <center>
                <button type="submit" class="btn btn-primary">บันทึก</button>
                 <a type="button" href="/form_register2" class="btn btn-danger">ยกเลิก</a>                      
        </center>            
</form>
</div>
</div> <!---divend -->	
<br>
<br>	
		

@endsection