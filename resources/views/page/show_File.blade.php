@extends('layouts.main')
@section('content')

<form action="/find_File" method="post">
<hr>
	<div class="form-inline" style="width:100%">
		<a href="/show_Gallery">
			<button type="button"  class="btn btn-primary">โชว์ Folder Gallery</button>
		</a>
		<button class="form-control"  style="float:right;" type="submit"><i class="fa fa-search"></i></button>
  		<input class="form-control" name="find" style="float:right;width:300px" value="" placeholder="ค้าหาชื่อไฟล์.." name="">	
	</div>


</form>	
<hr>

    <table style="width:100%;margin-top:0px;">
		<tr>
			<th width="5%"; style="background-color:#3366ff;text-align:center;">ลำดับ</th>
            <th width="20%"; style="background-color:#3366ff;text-align:center;">ชื่อภาพ/ไฟล์</th>
            <th width="15%"; style="background-color:#3366ff;text-align:center;">วันที่สร้าง</th>
			<th width="15%"; style="background-color:#3366ff;text-align:center;">วันที่ปรับปรุง</th>
            <th width="15%"; style="background-color:#3366ff;text-align:center;">ชื่อ Gallery</th>
            <th width="20%"; style="background-color:#3366ff;text-align:center;">ดำเนินการ</th>
		</tr>
        @foreach($showidfile as $show)
        <tr>
			<td>{{$i++}}</td>
            <td>{{$show -> picture_OriginalName}}</td>
            <td>{{$show -> picture_CreateDate}}</td>
            <td>{{$show -> picture_UpdateDate}}</td>
            <td>{{$show -> Gallery_name}}</td>
            <td>
            <center>
                <input type="text" name="IDFILE" value="{{$show->picture_id}}" hidden>
                <a href="/view_picture/{{$show->picture_id}}" class="btn btn-info"  target="new">ดูรูป</a>
                <a href="/edit_file/{{$show->picture_id}}" class="btn btn-warning" >แก้ไข</a>
                <a href="/deletefile/{{$show->picture_id}}" class="btn btn-danger" >ลบ</a>
                <a href="/download/{{$show->picture_id}}" class="btn btn-default" target="new">Download</a> <!---target="new" แทบใหม่ๆๆๆๆ-->
            </center>
            </td>
        </tr>
        @endforeach
     
                     
@endsection