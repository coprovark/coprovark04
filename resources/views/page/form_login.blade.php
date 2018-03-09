@extends('layouts.main')

@section('content')
            <form>
            <h1>เข้าสู่ระบบ</h1>
            <div class="form-group">
                                    <label>User</label>
                                    <input type="text" class="form-control"placeholder="ใส่ User">
                            </div>
                            <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"placeholder="ใส่ Password">
                            </div>
                            <center>
                            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                            <a type="button" href="/form_register" class="btn btn-warning">สมัครสมาชิก</a>
                            
                            </center>
            </form>

@endsection