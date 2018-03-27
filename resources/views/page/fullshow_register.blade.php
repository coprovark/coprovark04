@extends('layouts.main')

@section('content')
<style>
	.bord{
		border-top: 1px solid black;
		border-left: 1px solid black;
		border-bottom:1px solid black;
	}
	td{
        border:1px solid black;
    }
</style>

@foreach($fullshow as $item)
<div class="container" style="border:1px solid black;background-color:white;">
                <div class="row">             
                        <div class="col-md-3" style="">
                        <div class="row">
                        <div class="col-md-11" style="border-right:1px solid black;border-bottom:1px solid black;padding : 15px;background-color:#3366ff;">
                                <h1 style="text-align: center;">CO-PROVARK</h1>
                        </div>
                        </div>
                        <br>
                                <div class="form-group form-inline">
                                        <label>เลขที่ NO.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        {{$item -> co_id}}<br><br>
                                        <label>วันที่กรอกข้อมูล</label>
                                        {{$item -> co_date}}
                                </div>
                        </div>
                        <center>
                        <div class="col-md-6" style="">
                                
                                <div class="form-group" style="font-size : 15px ;padding : 20px ;">
                                        <center>
                                        <b>ใบรับสมัครเข้าร่วมโครงการวิจัย</b>
                                        <br><p>เรื่อง</p>
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
<div class="container">
<div class="row" style="border-left:1px solid black; border-right:1px solid black; border-bottom:1px solid black; background-color:#3366ff">
	<label style="padding:5px 0 5px 0;">ประวัติส่วนตัว (Presonal Information)</label>
</div>
<div class="row">
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>ประเภทผู้ใช้งาน</b>
                        </td>
			<td class="col-sm-10">
                        <?php 
				if($item -> co_typeuser==1) $typeuser="นักเรียน";
						else if($item -> co_typeuser==2)$typeuser="นักศึกษา";
				else if($item -> co_typeuser==3)$typeuser="ครู/อาจารย์";

			?>
                                <u>{{ $typeuser }}</u>
                        </td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>รหัสนักศึกษา</b></td>
			<td class="col-sm-3"> <u>{{ $item -> co_studencode }}</u></td>
			<td class="col-sm-3"><b>เลขที่บัตรประจำตัวประชาชน</b></td>
			<td class="col-sm-4"> <u>{{ $item -> co_idcard }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>ชื่อ-สกุล</b></td>
			<td class="col-sm-4"> <u>{{ $item -> title_name }} {{ $item -> co_fullname }}</u></td>
			<td class="col-sm-2"><b>ชื่อเล่น</b></td>
			<td class="col-sm-4"> <u>{{ $item ->co_nickname }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>สาขาวิชา</b></td>
			<td class="col-sm-4"><u>{{ $item -> branch_name }}</u></td>
			<td class="col-sm-2"><b>คณะ</b></td>
			<td class="col-sm-4"> <u>{{ $item -> faculty_name }} </td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>ชั้นปีที่</b></td>
			<td class="col-sm-2"> <u>{{ $item -> level_name }}</u></td>
			<td class="col-sm-1"><b>เกรด</b></td>
			<td class="col-sm-1"> <u>{{ $item ->co_grade }}</u></td>
			<td class="col-sm-2"><b>สถาบันการศึกษา</b></td>
			<td class="col-sm-4"> <u>{{ $item -> institution_name }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>ประเภทนักศึกษา</b></td>
			<td class="col-sm-4"> <u>{{ $item -> tpyestudent_name }}</u></td>
			<td class="col-sm-2"><b>Learning Style</b></td>
			<td class="col-sm-4"> <u>{{ $item -> style_name }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>วัน เดือน ปี เกิด</b></td>
			<td class="col-sm-2"> <u>{{ $item -> co_birthday }}</u> </td>
			<td class="col-sm-1"><b>อายุ (ปี)</b></td>
			<td class="col-sm-1"> <u>{{ $item -> co_age }}</u></td>
			<td class="col-sm-2"><b>เพศ</b></td>
			<td class="col-sm-4"> <u>{{ $item ->gender_name }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>น้ำหนัก</b></td>
			<td class="col-sm-2"> <u>{{ $item -> co_weigth }}</u> </td>
			<td class="col-sm-1"><b>ส่วนสูง</b></td>
			<td class="col-sm-1"> <u>{{ $item -> co_height }}</u></td>
			<td class="col-sm-2"><b>หมู่เลือด</b></td>
			<td class="col-sm-4">
                        <?php 
				if($item -> co_blood=='A') $blood="A";
				else if($item -> co_blood=='B') $blood="B";
				else if($item -> co_blood=='O') $blood="O";
				else if($item -> co_blood=='AB') $blood="AB";
			?>
				<u>{{ $blood }}</u>
                        </td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>สถานภาพ</b></td>
			<td class="col-sm-4"> <u>{{ $item -> status_name }}</u></td>
			<td class="col-sm-2"><b>สัญชาติ</b></td>
			<td class="col-sm-4"> <u>{{ $item -> citizenship_name }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>เชื้อชาติ</b></td>
			<td class="col-sm-4"> <u>{{ $item -> nationality_name }}</u></td>
			<td class="col-sm-2"><b>ศาสนา</b></td>
			<td class="col-sm-4"> <u>{{ $item -> religion_name }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2" style="padding-bottom:40px"><b>ที่อยู่ตามภูมิลำเนา</b></td>
			<td class="col-sm-10"> <u>{{ $item -> co_peraddress }}</u></td>
	</table>	
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2" style="padding-bottom:40px"><b>ที่อยู่ปัจจุบัน</b></td>
			<td class="col-sm-10"> <u>{{ $item -> co_preaddress }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>เบอร์โทรศัพท์</b></td>
			<td class="col-sm-4"> <u>{{ $item -> co_phone }}</u></td>
			<td class="col-sm-2"><b>มือถือ</b></td>
			<td class="col-sm-4"> <u>{{ $item -> co_mobile }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>E-mail</b></td>
			<td class="col-sm-4"> <u>{{ $item -> co_email }}</u></td>
			<td class="col-sm-2"><b>Facebook</b></td>
			<td class="col-sm-4"> <u>{{ $item -> co_social }}</u></td>
	</table>
	<table class="table" style="margin-bottom: 0px;">
			<td class="col-sm-2"><b>Web site</b></td>
			<td class="col-sm-10"> <u>z/u></td>
	</table>
</div>
<hr>
                        <center style="margin-bottom :50px;">
                                <a type="button" href="/edit_register/{{$item->co_id}}" class="btn btn-primary">แก้ไข</a>
                                <a type="button" href="/show_register" class="btn btn-danger">ย้อนกลับ</a>                      
                        </center>  
</div>
</div> 
@endforeach()	

@endsection