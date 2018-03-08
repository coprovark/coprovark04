@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<!DOCTYPE html>
<html lang="en">
<body style="background-image:url(https://lifestyle.campus-star.com/app/uploads/2016/08/campusstar_Line.jpg)">
    <h1>กรอกข้อมูล</h1>

    <form action="/page" method="post">
    
    ป้อนชื่อ : <input type="text" name="name">
    <input type="hidden" name="hidden" value="59122420131">
    <br>
    <br>เพศ : 
    <input type="radio" name="radio" value="ชาย">ชาย
    <input type="radio" name="radio" value="หญิง">หญิง
    <br>
    <br>
    สถานะ : 
    <input type="checkbox" name="checkbox" value="โสด">โสด
    <input type="checkbox" name="checkbox" value="มีแฟนแล้ว">มีแฟนแล้ว
    <br>
    <br>
    <input type="submit" value="ส่งค่า">
    </form>
    <br>
    <h1>แสดงข้อมูล</h1>

    ชื่อ : {{ $NAME }}<br>
    เพศ : {{ $ID }}<br>
    รหัส : {{ $GAIN }}<br>
    สถานะ : {{ $XXX }}
    

</body>
</html>
@endsection