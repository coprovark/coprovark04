@extends('layouts.main')

@section('content')
        <form action="/form_loginSTD" method="post" style="font-size : 15px">
           <center> <h1>เข้าสู่ระบบ</h1>
            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" style="width : 300px" placeholder="ใส่ User" required>
                            
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" style="width : 300px" placeholder="ใส่ Password" required>
            </div>

                            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                            <a type="button" href="/form_register" class="btn btn-warning">สมัครสมาชิก</a>
                            
                            
            </center>                 
</form>

<hr>
<!-- <h1>    username = {{ $username }}      </h1> -->
<?php if($name=='') $show = "กรุณาใส่ Username และ Password";else $show=$name ?>
<h1>สถานะ : {{ $show }}</h1>
<hr>





@endsection