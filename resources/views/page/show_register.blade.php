@extends('layouts.main')
@section('content')

<form action="/findCo_register" method="post">
<hr>
	<div class="form-inline" style="width:100%">
		<a href="/co_register">
			<button type="button"  class="btn btn-primary">เพิ่มข้อมูล</button>
		</a>
		<button class="form-control"  style="float:right;" type="submit"><i class="fa fa-search"></i></button>
  		<input class="form-control" name="find" style="float:right;width:300px" value="{{ $find }}" type="text" placeholder="ค้าหารหัสนักศึกษา/อ้างอิง" name="search2">	
	</div>


</form>	

<hr>
<div class="container-fluid" style="color:black;font-size:20px;background-color:#3366ff;border-top:1px solid black;border-left:1px solid black;border-right:1px solid black;border-radius: 15px 15px 0px 0px;padding:5px">
<b class="fa fa-dedent"> || ส่วนแสดงข้อมูล</b>
</div>

    <table style="width:100%;margin-top:0px;">
		<tr>
			<th width="5%"; style="background-color:#3366ff;text-align:center;">ลำดับ</th>
                        <th width="10%"; style="background-color:#3366ff;text-align:center;">ประเภทผู้ใช้งาน</th>
                        <th width="10%"; style="background-color:#3366ff;text-align:center;">รหัสนัศึกษา/อ้างอิง</th>
			<th width="15%"; style="background-color:#3366ff;text-align:center;">ชื่อ-สกุล</th>
                        <th width="5%"; style="background-color:#3366ff;text-align:center;">ชื่อเล่น</th>
                        <th width="5%"; style="background-color:#3366ff;text-align:center;">เพศ</th>
			<th width="15%"; style="background-color:#3366ff;text-align:center;">คณะ</th> 
			<th width="15%"; style="background-color:#3366ff;text-align:center;">สถาบันศึกษา</th>
                        <th width="20%"; style="background-color:#3366ff;text-align:center;">ดำเนินการ</th>
		</tr>
		
                @foreach($data_list as $item)
               <tr>
				<td>{{ $id++ }}</td>
				<td>{{ $item -> typeuser_name }}</td>
                                <td>{{ $item -> co_studencode }}</td>
                                <td>{{ $item -> co_fullname }}</td>
                                <td>{{ $item -> co_nickname }}</td>
				<td>{{ $item -> gender_name }}</td>
                                <td>{{ $item -> faculty_name }}</td>
				<td>{{ $item -> institution_name }}</td>
	
                                <td style="text-align:center;">
                                <button type="button" class="fa fa-close" style="padding:5px 10px;border-radius: 5px;border : 1px solid black;background-color:red;" onclick="return _confirm('{{ $item->co_id }}')"></button>
                                <a href="/fullshow_register/{{$item->co_id}}" class="fa fa-eye" style="padding:5px 10px;border-radius: 5px;border : 1px solid black;background-color:#ffff99;"></a> 
                                <a href="/edit_register/{{$item->co_id}}" class="fa fa-edit" style="padding:5px 10px;border-radius: 5px;border : 1px solid black;background-color:#99ccff;"></a>
                                </td>
                </tr>
			  @endforeach
	</table>
 


	<script>
		function _confirm(co_id){
			if(confirm ('ยืนยันการลบ')){
				window.location.href = 'deleteCo_register/'+co_id;
			}
		}
		
	</script>


@endsection