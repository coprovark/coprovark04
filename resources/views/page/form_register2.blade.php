@extends('layouts.main')
@section('content')
<div class="container" style="font-size : 15px">
         <form action="/form_register2" method="post">
                <center>
                        <h1>สมัครสมาชิก</h1></center>
                        <div class="form-group">
                        <label>ID</label>
                                        <input type="text" class="form-control" placeholder="ใส่ id" name="ID" style="width:70%">
                         </div>  
                        <div class="form-group">
                                    <label>User</label>
                                    <input type="text" class="form-control"placeholder="ใส่ User" name="USERNAME" style="width :70%">
                        </div>
                        <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"placeholder="ใส่ Password" name="PASSWORD" style="width :70%">
                        </div>
                        <label>STATUS</label>
                        <div class="form-inline" style="width:100%">
                                <select class="form-control" name="STATUS" style="width:9%" >
                                              <option value="1" onclick>1</option>
                                              <option value="2">2</option>
                                </select>
                        </div>
                <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                       
                       
                       
                        <a type="button" href="/form_register2" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br>
        </form>
 </div>

@endsection