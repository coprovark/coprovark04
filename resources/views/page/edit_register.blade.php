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
                                <label>เลขที่ NO.</label>
                                <input type="hidden" name="id" value="{{$item -> co_id}}">
                                <input type="text" class="form-control" style="margin:5%;width:61%;" placeholder="่ใส่ลำดับ"  value="{{$item -> co_id}}" readonly >
                                <div class="form-group form-inline">
                                <label>วันที่ปรับปรุง</label>
                                <input class="form-control form-control-sm" style="margin-top:5px;width:60%;" type="text" name="co_date" value="{{date("Y/m/d")}}" readonly >
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
                                <label>รหัสนักศึกษา/อ้างอิง</label>
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
                                @foreach($faculty as $list)
                                <option <?php if($list -> faculty_code == $item -> co_faculty) echo "selected"?> value="{{$list -> faculty_code}}"> {{$list -> faculty_name}}</option>
                                @endforeach
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
                                @foreach($level as $list)
                                <option <?php if($list -> level_code == $item -> co_level) echo "selected"?> value="{{$list -> level_code}}"> {{$list -> level_name}}</option>
                                @endforeach
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
                                @foreach($institution as $list)
                                <option <?php if($list -> institution_code == $item -> co_institution) echo "selected"?> value="{{$list -> institution_code}}"> {{$list -> institution_name}}</option>
                                @endforeach
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
                                @foreach($tpyestudent as $list)    
                                <input type="radio" name="co_tpyestudent"  <?php if($list -> tpyestudent_code == $item -> co_tpyestudent) echo "checked" ?> value="{{$list -> tpyestudent_code}}" > {{$list -> tpyestudent_name}} &emsp;
                                @endforeach
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>Learning Style</label>
                        </div>
                        <div class="col-md-3" style="">
                                <div class="form-group">
                                @foreach($style as $list)    
                                <input type="radio" name="co_style"  <?php if($list -> style_name == $item -> co_style) echo "checked" ?> value="{{$list -> style_name}}"> {{$list -> style_name}}&emsp;
                                @endforeach
   
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
                                @foreach($gender as $list)    
                                <input type="radio" name="co_gender"  <?php if($list -> gender_code == $item -> co_gender) echo "checked" ?> value="{{$list -> gender_code}}"> {{$list -> gender_name}}&emsp;
                                @endforeach
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
                                @foreach($blood as $list)    
                                <input type="radio" name="co_blood"  <?php if($list -> blood_name == $item -> co_blood) echo "checked" ?> value="{{$list -> blood_name}}"> {{$list -> blood_name}}&emsp;
                                @endforeach
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
                                @foreach($status as $list)    
                                <input type="radio" name="co_status"  <?php if($list -> status_code == $item -> co_status) echo "checked" ?> value="{{$list -> status_code}}"> {{$list -> status_name}}&emsp;
                                @endforeach
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>สัญชาติ</label>
                        </div>
                        <div class="col-md-3" style="">
                                <div class="form-group">
                                <select class="form-control" style="width:100%" name="co_nationality">
                                @foreach($nationality as $list)
                                <option <?php if($list -> nationality_code == $item -> co_nationality) echo "selected"?> value="{{$list -> nationality_code}}"> {{$list -> nationality_name}}</option>
                                @endforeach
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
                                <select class="form-control" style="width:100%" name="co_citizenship">
                                @foreach($citizenship as $list)
                                <option <?php if($list -> citizenship_code == $item -> co_citizenship) echo "selected"?> value="{{$list -> citizenship_code}}"> {{$list -> citizenship_name}}</option>
                                @endforeach
                                </select>
                                </div>
                        </div>
                        <div class="col-md-2" style="">
                                <label>ศาสนา</label>
                        </div>
                        <div class="col-md-3" style="">
                                <div class="form-group">
                                <select class="form-control" style="width:100%" name="co_religion">
                                @foreach($religion as $list)
                                <option <?php if($list -> religion_code == $item -> co_religion) echo "selected"?> value="{{$list -> religion_code}}"> {{$list -> religion_name}}</option>
                                @endforeach
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

