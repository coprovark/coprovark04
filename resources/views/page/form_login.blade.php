@extends('layouts.main')

@section('content')
        <form action="/page" method="post" style="font-size : 15px">
           <center> <h1>เข้าสู่ระบบ</h1>
            <div class="form-group">
                                <label>User</label>
                                <input type="text" name="user" class="form-control" style="width : 300px" placeholder="ใส่ User" required>
                            </div>
            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control" style="width : 300px" placeholder="ใส่ Password" required>
            </div>

                            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                            <a type="button" href="/form_register" class="btn btn-warning">สมัครสมาชิก</a>
                            
                            
            </center>                 
        </form>
            USERNAME sarawut <br>
            PASSWORD 1234 <br>
        <br>
        <br>           
                SHOW : USERNAME : {{ $USERNAME}} <br>
                SHOW : PASSWORD : {{ $PASS }}    
<h1>
    <?php
    if($USERNAME&&$PASS!='Null'){ 
        if($USERNAME=='sarawut' && $PASS=='1234'){
            echo "TRUE";
                        }else{
                              echo "FALSE";
                             }
    }
   
    ?>
</h1>

@endsection