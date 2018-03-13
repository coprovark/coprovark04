@extends('layouts.main')
@section('title','list_User')
@section('content')

<form action="/list_users_find" method="post">
<center><h1>ส่วนแสดงข้อมูล</h1></center>
<div class="form-inline" style="width:100%">
<a href="/form_register2">
	<button type="button"  class="btn btn-primary">เพิ่มข้อมูล</button>
</a>
	<button class="form-control"  style="float:right;" type="submit"><i class="fa fa-search"></i></button>
  	<input class="form-control" name="find" style="float:right;width:300px" value="{{ $find }}" type="text" placeholder="ค้าหา..." name="search2">	

</div>
    <br>
  	<br>
    <table style="width:100%">
			  <tr>
				<th width="5%"; style="background-color:#3366ff;text-align:center;">รหัส</th>
				<th width="35%"; style="background-color:#3366ff;text-align:center;">ชื่อบันชี</th> 
				<th width="30%"; style="background-color:#3366ff;text-align:center;">รหัสผ่าน</th>
                <th width="6%"; style="background-color:green;text-align:center;">สเตตัส</th>
                <th width="10%"; style="background-color:#e60000;text-align:center;">ลบ</th>
			  </tr>
              @foreach($data_list as $item)
              <tr>
				<td>{{ $item -> id}}</td>
				<td>{{ $item -> username}}</td> 
				<td>{{ $item -> password}}</td>
				<td>{{ $item -> status}}</td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="return _confirm('{{ $item->id }}')">ลบ</button>
                    <button type="button" href="/form_register" class="btn btn-warning">แก้ไข</button>
                </td>
			  @endforeach
	</table>
</form>
    <hr>



	<script>
		function _confirm(id){
			if(confirm ('ยืนยันการลบ')){
				window.location.href = 'delete_user/'+id;
			}
		}
		
	</script>


@endsection