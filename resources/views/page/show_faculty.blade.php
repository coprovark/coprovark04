@extends('layouts.main')
@section('title','list_User')
@section('content')
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

<form action="/list_users_find" method="post">
<div class="container-fluid" style="font-size:20px;background-color:#ffff66;border:1px solid black;border-radius: 15px 15px 0px 0px;">
<b class="fa fa-dedent"> || ส่วนแสดงข้อมูล</b>
</div>



    <table style="width:100%;margin-top:20px;">
			  <tr>
			  	<th style="background-color:#3366ff;text-align:center;">faculty_id</th>
				<th style="background-color:#3366ff;text-align:center;">faculty_code</th>
				<th style="background-color:#3366ff;text-align:center;">faculty_name</th> 
			  </tr>
              @foreach($co_list as $item)
              <tr>
			  	<td>{{ $item -> faculty_id}}</td>
				<td>{{ $item -> faculty_code}}</td>
				<td>{{ $item -> faculty_name}}</td>
				
			  @endforeach
	</table>




@endsection