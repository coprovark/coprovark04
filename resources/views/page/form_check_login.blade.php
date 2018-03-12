<!-- Route :     form_check_login -->
<!-- Controller : form_check_login -->
<!-- View :      form_check_login.blade.php  -->

<form action="/form_check_login" method="post" style="font-size : 15px">
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

@foreach ($users as $user) 
    USER : {{ $user->username }}<br><br>
    PASSWORD : {{ $user->password }}<br><br>
    ID : {{ $user->id }}
  
     

@endforeach