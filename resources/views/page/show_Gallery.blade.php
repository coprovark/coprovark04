@extends('layouts.main')
@section('content')

<form action="/find_Gallery" method="post">
<hr>
	<div class="form-inline" style="width:100%">
		<a href="/Gallery">
			<button type="button"  class="btn btn-primary">เพิ่ม Gallery</button>
		</a>
		<button class="form-control"  style="float:right;" type="submit"><i class="fa fa-search"></i></button>
  		<input class="form-control" name="find" style="float:right;width:300px" value="" placeholder="ค้าหาชื่อโฟร์เดอร์ Gallery.." name="">	
	</div>
</form>	
<hr>

    <table style="width:100%;margin-top:0px;">
		<tr>
			<th width="5%"; style="background-color:#3366ff;text-align:center;">ลำดับ</th>
            <th width="20%"; style="background-color:#3366ff;text-align:center;">ชื่อ Gallery</th>
            <th width="15%"; style="background-color:#3366ff;text-align:center;">วันที่สร้าง</th>
			<th width="15%"; style="background-color:#3366ff;text-align:center;">วันที่ปรับปรุง</th>
            <th width="15%"; style="background-color:#3366ff;text-align:center;">จำนวนภาพ/ไฟล์</th>
            <th width="20%"; style="background-color:#3366ff;text-align:center;">ดำเนินการ</th>
		</tr>
		 @foreach($showgallery as $show)
        <tr>
			<td>{{ $i++ }}</td>
            <td>Gallery : {{ $show -> Gallery_name }}</td>
            <td>{{ $show -> Gallery_CreateDate }}</td>
            <td>{{ $show -> Gallery_UpdateDate }}</td>
            <td>{{ DB::table('picture')->where('Gallery_name','=',$show->Gallery_name)->count() }} ไฟล์</td>
            <td>
            <center>
                <input name="ID" type="text" value="{{$show->Gallery_name}}" hidden>
                <a href="/insertFileGallery/{{$show -> Gallery_name }}" class="btn btn-primary">เพิ่มรูป/ไฟล์</a>
                <a href="/editGallery/{{$show -> Gallery_id}}" class="btn btn-warning" >แก้ไข</a>
                <a href="/deleteGallery/{{$show -> Gallery_id}}" class="btn btn-danger" >ลบ</a>
                <a href="/view_fileGallery/{{$show -> Gallery_id}}" class="btn btn-success" >เรียกดู</a>
            </center>
            </td>
        </tr>
        @endforeach
     
@endsection