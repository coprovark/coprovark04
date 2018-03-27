


@extends('layouts.main')
@section('content')
                        
	@foreach($fullshow as $item)
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
                                        <div class="form-control" style="width:61%;"><u>{{ $item -> co_no}}</u></div>
                                        <label>วันที่กรอกข้อมูล</label>
                                        <div class="form-control form-control-sm" style="margin-top:5px;width:61%;"><u>{{ $item -> co_date}}</u></div>
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
					<?php 
						if($item -> co_typeuser==1) $typeuser="นักเรียน";
						else if($item -> co_typeuser==2)$typeuser="นักศึกษา";
						else if($item -> co_typeuser==3)$typeuser="ครู/อาจารย์";

					?>
                                        <u>{{ $typeuser }}</u>
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
                                        <u>{{ $item -> co_studencode }}</u>
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>เลขที่บัตรประชาชน</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
					<u>{{ $item -> co_idcard }}</u>
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
                                        <div class="form-group">
                                        <u>{{ $item -> co_fullname }}</u>
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>ชื่อเล่น</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <u>{{ $item ->co_nickname }}</u>
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
					<?php 
						if($item -> co_branch==1) $branch="สาขาวิทยาการคอมพิวเตอร์";
						else if($item -> co_branch==2)$branch="สาขาวิศวกรรมซอร์ฟแวร์";
						else if($item -> co_branch==3)$branch="สาขาเทคโนโลยีมัลติมีเดียและแอนิเมชัน";
						else if($item -> co_branch==3)$branch="สาขาเทคโนโลยีสารสนเทศ";

					?>
                                        <u>{{ $branch }}</u>
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>คณะ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
					<?php 
						if($item -> co_faculty==1) $faculty="วิทยาการคอมพิวเตอร์"
					?>
                                        <u>{{ $faculty }}</u>
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
						<?php 
							if($item -> co_level==1) $level="ปี 1";
							else if($item -> co_level==2) $level="ปี 2";
							else if($item -> co_level==3) $level="ปี 3";
							else if($item -> co_level==4) $level="ปี 4";
							else if($item -> co_level==5) $level="ปี 5";
							else if($item -> co_level==6) $level="ปี 6";
						?>
						<u>{{ $level }}</u>       
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>เกรดเฉลี่ย</label>
                                </div>
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <u>{{ $item ->co_grade }}</u>
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>สถาบันการศึกษา</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
						<?php 
							if($item -> co_institution==1) $institution="มหาวิทยาลัยราชภัฏอุบลราชธานี";
						?>
						<u>{{ $institution }}</u> 
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
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        	<?php 
							if($item -> co_tpyestudent==1) $tpyestudent="ปกติ";
							else if($item -> co_tpyestudent==2) $tpyestudent="กศ.บป.";
							else if($item -> co_tpyestudent==3) $tpyestudent="กศ.อศ.";
						?>
						<u>{{ $tpyestudent }}</u>  
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>Learning Style</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
						<?php 
							if($item -> co_style==1) $style="V";
							else if($item -> co_style==2) $style="A";
							else if($item -> co_style==3) $style="R";
							else if($item -> co_style==4) $style="K";
							else if($item -> co_style==5) $style="Modal";
						?>
						<u>{{ $style }}</u>  
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
					<u>{{ $item -> co_birthday }}</u> 
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>อายุ(ปี) </label>
                                </div>
                                <div class="col-md-1" style="">
                                        <div class="form-group">
                                        <u>{{ $item -> co_age }}</u> 
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>เพศ</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
						<?php 
							if($item -> co_gender==1) $gender="ชาย";
							else if($item -> co_gender==2) $gender="หญิง";
						?>
						<u>{{ $gender }}</u> 
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
                                        <u>{{ $item -> co_weigth }}</u> 
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>ส่วนสูง</label>
                                </div>
                                <div class="col-md-1" style="">
                                        <div class="form-group">
					<u>{{ $item -> co_height }}</u>                  
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>หมูเลือด</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        	<?php 
							if($item -> co_blood==1) $blood="A";
							else if($item -> co_blood==2) $blood="B";
							else if($item -> co_blood==3) $blood="O";
							else if($item -> co_blood==4) $blood="AB";
						?>
						<u>{{ $blood }}</u> 
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
                                        <?php 
							if($item -> co_status==1) $status="โสด";
							else if($item -> co_status==2) $status="แต่งงาน";
							else if($item -> co_status==3) $status="หม้าย";
							else if($item -> co_status==4) $status="อย่าร้าง";
						?>
						<u>{{ $status }}</u> 
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>สัญชาติ</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <u>{{ $item -> co_nationality }}</u> 
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
                                        <u>{{ $item -> co_citizenship }}</u> 
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>ศาสนา</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <u>{{ $item -> co_religion }}</u>
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
                                        <u>{{ $item -> co_peraddress }}</u>
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
                                        <u>{{ $item -> co_preaddress }}</u>
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
                                        <u>{{ $item -> co_phone }}</u>
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>มือถือ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <u>{{ $item -> co_mobile }}</u>
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
					<u>{{ $item -> co_email }}</u>
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>Facebook</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <u>{{ $item -> co_social }}</u>
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
                                        <u>{{ $item -> co_website }}</u>
                                        </div>
                                </div>
                        </div>
        </div>
        <br>

        </div>
	<hr>
                        <center style="margin-bottom :50px;">
                                <a type="button" href="/edit_register/{{$item->co_id}}" class="btn btn-primary">แก้ไข</a>
                                <a type="button" href="/show_register" class="btn btn-danger">ย้อนกลับ</a>                      
                        </center>  
	     
</form>	
@endforeach()	

@endsection