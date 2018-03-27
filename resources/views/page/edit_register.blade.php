@extends('layouts.main')
@section('content')

@foreach($edit as $item)
<form class="form-group form-inline" action="/updateCo_register" method="post">

<div class="container" style="border:1px solid black;background-color:white;">
                <div class="row">             
                        <div class="col-md-3" style="">
                        <div class="row">
                        <div class="col-md-11" style="border-right:1px solid black;border-bottom:1px solid black;padding : 15px;background-color:#3366ff;">
                                <h1 style="text-align: center;">CO-PROVARK</h1>
                        </div>
                        </div>
                        <br>
                        <input type="hidden" name="id" value="{{$item -> co_id}}">

                                <label>เลขที่ NO.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" class="form-control" style="width:61%;" placeholder="่ใส่ลำดับ" name="co_no" value="{{$item -> co_id}}" >
                                <div class="form-group form-inline">
                                <label>วันที่กรอกข้อมูล</label>
                                <input class="form-control form-control-sm" style="margin-top:5px;width:61%;" type="Date" name="co_date" value="{{$item -> co_date}}" >
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
                                @foreach($typeuser as $list)    
                                <input type="radio" name="co_typeuser"  <?php if($list -> typeuser_code == $item -> co_typeuser) echo "checked" ?> value="{{$list -> typeuser_code}}" > {{$list -> typeuser_name}} &emsp;
                                @endforeach
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
                                <input type="number" name="co_studencode" class="form-control"  placeholder="รหัสนักศึกษาอ้างอิง" value="{{$item -> co_studencode}}" style="width :100%" >
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>เลขที่บัตรประชาชน</label>
                        </div>
                        <div class="col-md-4" style="">
                                <div class="form-group">
                                <input type="number" name="co_idcard" class="form-control"  placeholder="เลขที่บัตรประชาชน" value="{{$item -> co_idcard}}" style="width :100%" >
                                </div>
                        </div>
                </div>
</div>
<br>
<div class="container">
                <div class="row">
                        <div class="col-md-2" style="">
                                <label>ชื่อ</label>
                        </div>
                        <div class="col-md-4" style="">
                                <div class="form-group form-inline">
                                <select class="form-control" style="width:31%" name="co_titlename">
                                @foreach($titlename as $list)
                                <option <?php if($list -> title_code == $item -> co_titlename) echo "selected"?> value="{{$list -> title_code}}"> {{$list -> title_name}}</option>
                                @endforeach

                                @foreach($edit as $item)
                                <input type="text" class="form-control" style="width:68%;margin-left:1px;" placeholder="ชื่อ-สกุล" name="co_fullname" value="{{$item -> co_fullname}}" >
                                @endforeach
                        </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>ชื่อเล่น</label>
                        </div>
                        <div class="col-md-4" style="">
                                <div class="form-group">
                                <input type="text" class="form-control" style="width:100%;" placeholder="ชื่อเล่น" name="co_nickname" value="{{$item -> co_nickname}}" >
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
                                @foreach($branch as $list)
                                <option <?php if($list -> branch_code == $item -> co_branch) echo "selected"?> value="{{$list -> branch_code}}"> {{$list -> branch_name}}</option>
                                @endforeach
                                </select>   
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>คณะ</label>
                        </div>
                        <div class="col-md-4" style="">
                                <div class="form-group">
                                <select class="form-control" style="width:115%" name="co_faculty">
                                <option  <?php if($item -> co_faculty==1)$co_faculty="selected";else  $co_faculty="" ?> {{$co_faculty}} value="1">คณะวิทยาการคอมพิวเตอร์</option>
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
                                <option <?php if($item -> co_level==1)$level1="selected";else  $level1="" ?> {{$level1}} value="1">ปี 1</option>
                                <option <?php if($item -> co_level==2)$level2="selected";else  $level2="" ?> {{$level2}} value="2">ปี 2</option>
                                <option <?php if($item -> co_level==3)$level3="selected";else  $level3="" ?> {{$level3}} value="3">ปี 3</option>
                                <option <?php if($item -> co_level==4)$level4="selected";else  $level4="" ?> {{$level4}} value="4">ปี 4</option>
                                <option <?php if($item -> co_level==5)$level5="selected";else  $level5="" ?> {{$level5}} value="5">ปี 5</option>
                                <option <?php if($item -> co_level==6)$level6="selected";else  $level6="" ?> {{$level6}} value="6">ปี 6</option>
                                </select>  
                                </div>
                        </div>
                        <div class="col-md-1" style="">
                                <label>เกรดเฉลี่ย</label>
                        </div>
                        <div class="col-md-2" style="">
                                <div class="form-group">
                                <input type="text" class="form-control" style="width:50%;" placeholder="เกรดเฉลี่ย" name="co_grade" value="{{$item -> co_grade}}" >
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>สถาบันการศึกษา</label>
                        </div>
                        <div class="col-md-3" style="">
                                <div class="form-group">
                                <select class="form-control" style="width:100%" name="co_institution">
                                <option <?php if($item -> co_institution==1)$co_institution="selected";else  $co_institution="" ?> {{$co_institution}} value="1">มหาวิทยาลัยราชภัฏอุบลราชธานี</option>
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
                                <input name="co_tpyestudent" type="radio" <?php if($item -> co_tpyestudent == 1) $tpyestudent1="checked";else $tpyestudent1=""; ?> {{$tpyestudent1}}  value="1" > ปกติ &emsp;
                                <input name="co_tpyestudent" type="radio" <?php if($item -> co_tpyestudent == 2) $tpyestudent2="checked";else $tpyestudent2=""; ?> {{$tpyestudent2}}  value="2" > กศ.บป. &emsp;
                                <input name="co_tpyestudent" type="radio" <?php if($item -> co_tpyestudent == 3) $tpyestudent3="checked";else $tpyestudent3=""; ?> {{$tpyestudent3}}  value="3" > กศ.อศ. &emsp;
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>Learning Style</label>
                        </div>
                        <div class="col-md-3" style="">
                                <div class="form-group">
                                <input type="radio" name="co_style" <?php if($item -> co_style == 1) $style1="checked";else $style1=""; ?> {{$style1}} value="1" > V&emsp;
                                <input type="radio" name="co_style" <?php if($item -> co_style == 2) $style2="checked";else $style2=""; ?> {{$style2}} value="2" > A&emsp;
                                <input type="radio" name="co_style" <?php if($item -> co_style == 3) $style3="checked";else $style3=""; ?> {{$style3}} value="3" > R&emsp;
                                <input type="radio" name="co_style" <?php if($item -> co_style == 4) $style4="checked";else $style4=""; ?> {{$style4}} value="4" > K&emsp;
                                <input type="radio" name="co_style" <?php if($item -> co_style == 5) $style5="checked";else $style5=""; ?> {{$style5}} value="5" > Model&emsp;
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
                                <input class="form-control form-control-sm" id="date" type="date" name="co_birthday" value="{{$item -> co_birthday}}" onchange="calAge(this);">
                                </div>
                        </div>
                        <div class="col-md-1" style="">
                                <label>อายุ(ปี) </label>
                        </div>
                        <div class="col-md-1" style="">
                                <div class="form-group">
                                <input type="text" id="age" class="form-control" style="width:100%;" placeholder="อายุ" name="co_age" value="{{$item -> co_age}}" >
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>เพศ</label>
                        </div>
                        <div class="col-md-3" style="">
                                <div class="form-group">
                                <input type="radio" name="co_gender" <?php if($item -> co_gender == 1) $gender1="checked";else $gender1=""; ?> {{$gender1}} value="1"> ชาย &emsp;
                                <input type="radio" name="co_gender" <?php if($item -> co_gender == 2) $gender2="checked";else $gender2=""; ?> {{$gender2}} value="2"> หญิง &emsp;
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
                                <input type="text" class="form-control" style="width:40%;" placeholder="น้ำหนัก" name="co_weigth" value="{{$item -> co_weigth}}" >
                                </div>
                        </div>
                        <div class="col-md-1" style="">
                                <label>ส่วนสูง</label>
                        </div>
                        <div class="col-md-1" style="">
                                <div class="form-group">
                                <input type="text" class="form-control" style="width:100%;" placeholder="ส่วนสูง" name="co_height" value="{{$item -> co_height}}" >
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>หมูเลือด</label>
                        </div>
                        <div class="col-md-3" style="">
                                <div class="form-group">
                                <input type="radio" name="co_blood" <?php if($item -> co_blood == 'A') $blood1="checked";else $blood1=""; ?> {{$blood1}} value="A" > A&emsp;
                                <input type="radio" name="co_blood" <?php if($item -> co_blood == 'B') $blood2="checked";else $blood2=""; ?> {{$blood2}} value="B" > B&emsp;
                                <input type="radio" name="co_blood" <?php if($item -> co_blood == 'O') $blood3="checked";else $blood3=""; ?> {{$blood3}} value="O" > O&emsp;
                                <input type="radio" name="co_blood" <?php if($item -> co_blood == 'AB') $blood4="checked";else $blood4=""; ?> {{$blood4}} value="AB" > AB&emsp;
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
                                <input type="radio" name="co_status" <?php if($item -> co_status == 1) $status1="checked";else $status1=""; ?> {{$status1}} value="1" > โสด &emsp;
                                <input type="radio" name="co_status" <?php if($item -> co_status == 2) $status2="checked";else $status2=""; ?> {{$status2}} value="2" > แต่งงาน &emsp;
                                <input type="radio" name="co_status" <?php if($item -> co_status == 3) $status3="checked";else $status3=""; ?> {{$status3}} value="3" > หม้าย &emsp;
                                <input type="radio" name="co_status" <?php if($item -> co_status == 4) $status4="checked";else $status4=""; ?> {{$status4}} value="4" > อย่าร้าง &emsp;
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>สัญชาติ</label>
                        </div>
                        <div class="col-md-3" style="">
                                <div class="form-group">
                                <input type="text" name="co_nationality" class="form-control" id="exampleInputPassword1" placeholder="สัญชาติ" value="{{$item -> co_nationality}}" style="width :100%"  >
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
                                <input type="text" name="co_citizenship" class="form-control" id="exampleInputPassword1" placeholder="เชื้อชาติ" value="{{$item -> co_citizenship}}" style="width :100%" >
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>ศาสนา</label>
                        </div>
                        <div class="col-md-3" style="">
                                <div class="form-group">
                                <input type="text" name="co_religion" class="form-control" id="exampleInputPassword1" placeholder="ศาสนา" value="{{$item -> co_religion}}" style="width :100%" >
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
                                <textarea name="co_peraddress" class="form-control" style="width :790px;height:100px;" placeholder="ที่อยู่ตามภูมิลำเนา" value="{{$item -> co_peraddress}}" >{{$item -> co_peraddress}}</textarea>
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
                                <textarea name="co_preaddress" class="form-control" style="width :790px;height:100px;" placeholder="ที่อยู่ปัจจุบัน" value="{{$item -> co_preaddress}}" >{{$item -> co_preaddress}}</textarea>
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
                                <input type="text" class="form-control" style="width:100%;" placeholder="่เบอร์โทรศัพท์" name="co_phone" value="{{$item -> co_phone}}" >
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>มือถือ</label>
                        </div>
                        <div class="col-md-4" style="">
                                <div class="form-group">
                                <input type="text" class="form-control" style="width:100%;" placeholder="มือถือ" name="co_mobile" value="{{$item -> co_mobile}}" >
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
                                <input type="text" class="form-control" style="width:100%;" placeholder="่E-mail" name="co_email" value="{{$item -> co_email}}" >
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>Facebook</label>
                        </div>
                        <div class="col-md-4" style="">
                                <div class="form-group">
                                <input type="text" class="form-control" style="width:100%;" placeholder="Facebook" name="co_social" value="{{$item -> co_social}}" >
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
                                <input type="text" class="form-control" style="width:200%;" placeholder="่web site" name="co_website" value="{{$item -> co_website}}" >
                                </div>
                        </div>
                </div>
</div>
<br>

</div>
<hr>
                <center style="margin-bottom :50px;">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/show_register" class="btn btn-danger">ยกเลิก</a>                      
                </center>  
     
</form>	
@endforeach()	

@endsection

