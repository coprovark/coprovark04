@extends('layouts.main')

@section('content')
        <form action="/form_login2" method="post" style="font-size : 15px">
           <center> <h1>เข้าสู่ระบบ</h1>
            <div class="form-group">
                                <label>User</label>
                                <input type="text" name="username" class="form-control" style="width : 300px" placeholder="ใส่ User">
                            
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" style="width : 300px" placeholder="ใส่ Password">
            </div>

                            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                            <a type="button" href="/form_register" class="btn btn-warning">สมัครสมาชิก</a>
                            
                            
            </center>                 
</form>

<hr>

<h1>username = {{ $username }}</h1>
<h1>id = {{ $name }}</h1>

@endsection