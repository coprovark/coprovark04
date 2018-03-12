@extends('layouts.main')
@section('title','list_User')
@section('content')
<center><h1>ส่วนแสดงข้อมูล</h1></center>
    <table style="width:100%">
			  <tr>
				<th width="5%"; style="background-color:#3366ff;">รหัส</th>
				<th width="35%"; style="background-color:#3366ff;">ชื่อบันชี</th> 
				<th width="30%"; style="background-color:#3366ff;">รหัสผ่าน</th>
                <th width="6%"; style="background-color:green;">สเตตัส</th>
                <th width="10%"; style="background-color:#e60000;">ลบ</th>
			  </tr>
              @foreach($data_list as $item)
              <tr>
				<td>{{ $item -> id}}</td>
				<td>{{ $item -> username}}</td> 
				<td>{{ $item -> password}}</td>
				<td>{{ $item -> status}}</td>
                <td>
                    <button type="submit" class="btn btn-danger">ลบ</button>
                    <button type="button" href="/form_register" class="btn btn-warning">แก้ไข</button>
                </td>
			  @endforeach
	</table>
    <hr>

@endsection