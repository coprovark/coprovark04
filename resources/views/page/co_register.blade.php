@extends('layouts.main')
@section('content')

        <form class="form-group form-inline" action="/co_register" method="post">

        <div class="container" style="border:1px solid black;background-color:white;">
                        <div class="row">             
                                <div class="col-md-3" style="">
                                <div class="row">
                                <div class="col-md-11" style="border-right:1px solid black;border-bottom:1px solid black;padding : 15px;background-color:#3366ff;">
                                        <h1 style="text-align: center;">COPROVARK</h1>
                                </div>
                                </div>
                                <br>
                                        <label>เลขที่ NO.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control" style="width:61%;" placeholder="่ใส่ลำดับ" name="co_no" >
                                        <div class="form-group form-inline">
                                        <label>วันที่กรอกข้อมูล</label>
                                        <input class="form-control form-control-sm" style="margin-top:5px;width:61%;" type="Date" name="co_date">
                                </div>
                                <br><br>
                                </div>
                                <center>
                                <div class="col-md-6" style="">     
                                        <div class="form-group" style="font-size : 15px ;padding : 20px ;">
                                        <center>
                                        <b>ใบรับสมัครเข้าร่วมโครงการวิจัย</b>
                                        <br><br><p>เรื่อง</p>
                                        <p>การพัฒนารูปแบบและการส่งเสริมศักยภาพผู้ผลิตซอฟต์แวร์และบริการซอฟต์แวร์โด้ยใช้</p>
                                        <p>เทคนิคโดชชิ่งตามสไตล์การเรียนรู้แบบ VARK เพื่อให้สอดคล้องกับความต้องการ</p>
                                        <p>ของผู้ประกอบการและอุตสาหกรรมซอฟแวร์</p>
                                        </center>
                                        </div>
                                </div>
                                </center>  
                                <center>
                                <div class="col-md-3" >
                                        <div class="form-group"style="float:right;margin-top:10%;width :120px;height:150px ;border:1px solid black">
                                        <br>
                                        ขนาดรูปถ่าย
                                        <br>
                                        <br>
                                       size 1.5 นิ้ว
                                        </div>
                                </div>
                                </center>
                        </div>                      
        </div>
        <div class="container"  style=";background-color:#3366ff;border-left:1px solid black;border-right:1px solid black;">
                        <div class="row">
                                <div class="col-md-12" style="padding:5px;">
                                        <h4>ประวัติส่วนตัว</h4>
                                </div>
                        </div>
        </div>
        <div class="container" style="border:1px solid black;background-color:white;">
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>ประเภทผู้ใช้งาน</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="radio" name="co_typeuser" value="1" > นักเรียน &emsp;
                                        <input type="radio" name="co_typeuser" value="2" > นักศึกษา &emsp;
                                        <input type="radio" name="co_typeuser" value="3" > ครู/อาจารย์ &emsp;
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>รหัสนักศึกษาอ้างอิง</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="number" name="co_studencode" class="form-control"  placeholder="รหัสนักศึกษาอ้างอิง" style="width :100%" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>เลขที่บัตรประชาชน</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="number" name="co_idcard" class="form-control"  placeholder="เลขที่บัตรประชาชน" style="width :100%" >
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>ชื่อ-สกุล</label>
                                </div>
                                
                                <div class="col-md-4" style="">   
                                <div class="form-group form-inline">
                                        <select class="form-control" style="width:31%" name="co_titlename">
                                        <option value="1">นาย</option>
                                        <option value="2">นาง</option>
                                        <option value="3">นางสาว</option>       
                                        <input type="text" class="form-control" style="width:68%;margin-left:1px;" placeholder="ชื่อ-สกุล" name="co_fullname" >
                                        </select>
                                </div>        
                                </div>
                                <div class="col-md-2" style="">
                                        <label>ชื่อเล่น</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="ชื่อเล่น" name="co_nickname" >
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
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:87%" name="co_branch">
                                        <option value="1">สาขาวิทยาการคอมพิวเตอร์</option>
                                        <option value="2">สาขาวิศวกรรมซอร์ฟแวร์</option>
                                        <option value="3">สาขาเทคโนโลยีมัลติมีเดียและแอนิเมชัน</option>
                                        <option value="4">สาขาเทคโนโลยีสารสนเทศ</option>
                                        </select>   
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>คณะ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:115%" name="co_faculty">
                                        <option value="1">คณะวิทยาการคอมพิวเตอร์</option>
                                        </select>
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>ชั้นปี</label>
                                </div>
                                <div class="col-md-1" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="co_level">
                                        <option value="1">ปี 1</option>
                                        <option value="2">ปี 2</option>
                                        <option value="3">ปี 3</option>
                                        <option value="4">ปี 4</option>
                                        <option value="5">ปี 5</option>
                                        <option value="6">ปี 6</option>
                                        </select>  
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>เกรดเฉลี่ย</label>
                                </div>
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:50%;" placeholder="เกรดเฉลี่ย" name="co_grade" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>สถาบันการศึกษา</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="co_institution">
                                        <option value="1">มหาวิทยาลัยราชภัฏอุบลราชธานี</option>
                                        </select> 
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>ประเภทนักศึกษา</label>
                                </div>
                                <div class="col-md-4" style="" >
                                        <div class="form-group">
                                        <input name="co_tpyestudent" type="radio"  value="1" > ปกติ &emsp;
                                        <input name="co_tpyestudent" type="radio"  value="2" > กศ.บป. &emsp;
                                        <input name="co_tpyestudent" type="radio"  value="3" > กศ.อศ. &emsp;
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>Learning Style</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input type="checkbox" name="co_style" value="V"> V&emsp;
                                        <input type="checkbox" name="co_style" value="A"> A&emsp;
                                        <input type="checkbox" name="co_style" value="R"> R&emsp;
                                        <input type="checkbox" name="co_style" value="K"> K&emsp;
                                        <input type="checkbox" name="co_style" value="Model"> Model&emsp;
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
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <input class="form-control form-control-sm" id="date" type="date" name="co_birthday" onchange="calAge(this);">
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>อายุ(ปี) </label>
                                </div>
                                <div class="col-md-1" style="">
                                        <div class="form-group">
                                        <input type="text" id="age" class="form-control" style="width:100%;" placeholder="อายุ" name="co_age" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>เพศ</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input type="radio" name="co_gender" value="1" > ชาย &emsp;
                                        <input type="radio" name="co_gender" value="2" > หญิง &emsp;
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>น้ำหนัก</label>
                                </div>
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:40%;" placeholder="น้ำหนัก" name="co_weigth" >
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>ส่วนสูง</label>
                                </div>
                                <div class="col-md-1" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="ส่วนสูง" name="co_height" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>หมูเลือด</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input type="radio" name="co_blood" value="A" > A&emsp;
                                        <input type="radio" name="co_blood" value="B" > B&emsp;
                                        <input type="radio" name="co_blood" value="O" > O&emsp;
                                        <input type="radio" name="co_blood" value="AB" > AB&emsp;
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>สถานภาพ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="radio" name="co_status" value="1" > โสด &emsp;
                                        <input type="radio" name="co_status" value="2" > แต่งงาน &emsp;
                                        <input type="radio" name="co_status" value="3" > หม้าย &emsp;
                                        <input type="radio" name="co_status" value="4" > อย่าร้าง &emsp;
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>สัญชาติ</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:220%" name="co_citizenship">
                                        <option value="1">ไทย</option>
                                        <option value="2">ลาว</option>
                                        <option value="3">กัมพูชา</option>
                                        <option value="4">พม่า</option>
                                        </select> 
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>เชื้อชาติ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:220%" name="co_nationality">
                                        <option value="1">ไทย</option>
                                        <option value="2">ลาว</option>
                                        <option value="3">กัมพูชา</option>
                                        <option value="4">พม่า</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>ศาสนา</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:220%" name="co_religion">
                                        <option value="1">พุทธ</option>
                                        <option value="2">คริสต์</option>
                                        <option value="3">อิสลาม</option>
                                        <option value="4">ฮินดู</option>
                                        </select>
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>ที่อยู่ตามภูมิลำเนา</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <textarea name="co_peraddress" class="form-control" style="width :790px;height:150px;" placeholder="ที่อยู่ตามภูมิลำเนา" ></textarea>
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
                                        <textarea name="co_preaddress" class="form-control" style="width :790px;height:150px;" placeholder="ที่อยู่ปัจจุบัน" ></textarea>
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
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="่เบอร์โทรศัพท์" name="co_phone" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>มือถือ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="มือถือ" name="co_mobile" >
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>E-mail</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="่E-mail" name="co_email" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>Facebook</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="Facebook" name="co_social" >
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>web site</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:200%;" placeholder="่web site" name="co_website" >
                                        </div>
                                </div>
                        </div>
        </div>
        <br>

        </div>
	<hr>
                        <center style="margin-bottom :50px;">
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                                <a type="button" href="/form_registerSTD" class="btn btn-danger">ยกเลิก</a>                      
                        </center>  
	     
</form>	
	

@endsection