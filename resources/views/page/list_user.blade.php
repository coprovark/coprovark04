@extends('layouts.main')
@section('title','list_User')
@section('content')

<form action="/list_users_find" method="post">
<div class="container-fluid" style="font-size:20px;background-color:#ffff66;border:1px solid black;border-radius: 15px 15px 0px 0px;">
<b class="fa fa-dedent"> || ส่วนแสดงข้อมูล</b>
</div>

<hr>
	<div class="form-inline" style="width:100%">
		<a href="/form_register2">
			<button type="button"  class="btn btn-primary">เพิ่มข้อมูล</button>
		</a>
		<button class="form-control"  style="float:right;" type="submit"><i class="fa fa-search"></i></button>
  		<input class="form-control" name="find" style="float:right;width:300px" value="{{ $find }}" type="text" placeholder="ค้าหา..." name="search2">	
	</div>

</form>	
<hr>


    <table style="width:100%;margin-top:20px;">
			  <tr>
			  	<th width="3%"; style="background-color:#3366ff;text-align:center;">ลำดับ</th>
				<th width="10%"; style="background-color:#3366ff;text-align:center;">รหัสนักศึกษา</th>
				<th width="30%"; style="background-color:#3366ff;text-align:center;">ชื่อ-นามสกุล</th> 
				<th width="10%"; style="background-color:#3366ff;text-align:center;">วันเกิด</th>
                <th width="20%"; style="background-color:#3366ff;text-align:center;">สังกัดคณะ</th>
                <th width="20%"; style="background-color:#3366ff;text-align:center;">ดำเนินการ</th>
			  </tr>
              @foreach($data_list as $item)
              <tr>
			  	<td>{{ $item -> id}}</td>
				<td>{{ $item -> sid}}</td>
				<?php if($item -> titleName == 1)$titleName="นาย";?>
				<?php if($item -> titleName == 2)$titleName="นาง";?>
				<?php if($item -> titleName == 3)$titleName="นางสาว";?>
				<td>{{ $titleName }} {{  $item -> fullName}}</td> 

				
				<td>{{ $item -> birthDay}}</td>
				<?php if($item -> facultyID == 1)$facultyID="วิทยาการคอมพิวเตอร์";?>
				<td>{{ $facultyID }}</td>
                <td style="text-align:center;">
                    <button type="button" class="fa fa-close" style="padding:5px 10px;border-radius: 5px;background-color:red;" onclick="return _confirm('{{ $item->id }}')">
                    <button type="button" class="fa fa-edit" style="padding:5px 10px;border-radius: 5px;background-color:#00b359;" href="/form_register" class="btn btn-warning">แก้ไข</button>
                </td>
			  @endforeach
	</table>



	<script>
		function _confirm(id){
			if(confirm ('ยืนยันการลบ')){
				window.location.href = 'delete_user/'+id;
			}
		}
		
	</script>


@endsection