@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<body style="background-color:yellow">
    <form action="/page" method="post">
    <br>
    ชื่อบันชี 
    <input type="text" name="name">
    <br>
    <br>
    รหัสผ่าน 
    <input type="password" name="password">
    <br>
    <br>
    เพศ
    <select  name="select">
    <option value="ชาย">ชาย</obtion>
    <option value="หญิง">หญิง</obtion>
    </select>
    <br>
    <br>รายละเอียด<br>
    <textarea name="area" style="height:100px"></textarea>
    <br>
    <br>
    <input type="submit" value="ตกลง">
    <form>
    <br>
    <br>
    <h1>แสดงข้อมูล</h1>
     <table style="width:100%">

    ชื่อบันชี : {{ $NAM }}<br><br>
    รหัส : {{ $PASS }}<br><br>
    เลือก : {{ $SELEC }}<br><br>
    อื่นๆ : {{ $AREA }}
    </table>
</body>

@endsection