@extends('layouts.main')
@section('content')
        <div class="container-fluid" style="font-size:20px;background-color:#ffff66;border:1px solid black;border-radius: 15px 15px 0px 0px;">
                <b class="fa fa-paste"> || co_user</b>
        </div>
        <div class="container-fluid" style="border:1px solid black;border-radius: 0px 0px 15px 15px;"> 
        <div class="container" style="font-size : 15px;padding:30px 30px 30px 30px"> 
                <form action="/co_user_register" method="post">  
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>user_code</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="text" name="user_code" class="form-control" id="exampleInputPassword1" placeholder="user_code" style="width :20%" required>
                                        </div>
                                </div>
                        </div>
                        </div>
                        <br> 
                        <div class="container">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>user_name</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="text" name="user_name" class="form-control" id="exampleInputPassword1" placeholder="user_name" style="width :20%" required>
                                        </div>
                                </div>
                        </div>
                        </div>
                        <br> 
                        
                        
                        <center>
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                                <a type="button" href="/co_user_register" class="btn btn-danger">ยกเลิก</a>                      
                        </center>            
                </form>
        </div>
        </div> <!---divend -->	
<br>
<br>	
		

@endsection