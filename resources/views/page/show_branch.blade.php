@extends('layouts.main')
@section('title','co_User')
@section('content')

<form action="/list_users_find" method="post">
<div class="container-fluid" style="font-size:20px;background-color:#ffff66;border:1px solid black;border-radius: 15px 15px 0px 0px;">
<b class="fa fa-dedent"> || ส่วนแสดงข้อมูล co_branch</b>
</div>

<hr>
	<div class="form-inline" style="width:100%">
		<a href="/co_branch_register">
			<button type="button"  class="btn btn-primary">เพิ่มข้อมูล</button>
		</a>
	</div>

</form>	
<hr>


    <table style="width:100%;margin-top:20px;">
			  <tr>
			  	<th width="5%"; style="background-color:#3366ff;text-align:center;">branch_id</th>
				<th width="5%"; style="background-color:#3366ff;text-align:center;">branch_code</th>
				<th width="5%"; style="background-color:#3366ff;text-align:center;">branch_name</th> 
			  </tr>
			
	</table>



	<script>
		function _confirm(id){
			if(confirm ('ยืนยันการลบ')){
				window.location.href = 'delete_user/'+id;
			}
		}
		
	</script>


@endsection