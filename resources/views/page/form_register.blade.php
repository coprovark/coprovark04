@extends('layouts.main')

@section('content')
<div class="container" style="font-size : 15px">
            <form>
            <center><h1>สมัครสมาชิก</h1></center>
                    <div class="form-group">
                         <label>ชื่อ-สกุล</label>
                            <div class="form-inline" style="width:100%">
                                <select class="form-control" style="width:9%">
                                              <option>นาย</option>
                                              <option>นาง</option>
                                              <option>นางสาว</option>
                                </select>
                                        <input type="text" class="form-control" placeholder="ชื่อ" name="name" style="width:30%">
                                        <input type="text" class="form-control" placeholder="นามสกุล" name="name" style="width:30%">
                                      </div>
                                   </div>
                           
                            <div class="form-group">
                              <label>เพศ</label><br>
                              <input type="radio"  name="radio" value="ชาย"> ชาย
                              <input type="radio" name="radio" value="หญิง"> หญิง<br>
                            </div>
                            
                            <div class="form-group">
                              <label>เบอร์โทรศัพท์</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ใส่เบอร์โทร" style="width :70%">
                            </div>

                            <div class="form-group">
                            <label>ที่อยู่</label>
                            <br>
                            <textarea name="area" class="form-control" style="width :70%;height:350px;" placeholder="ใส่ที่อยู่" ></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control"placeholder="ใส่ E-mail" style="width :70%">
                            </div>
                            <br>
                            <div class="form-group">
                            <label>สิ่งทีชอบ</label>
                            <br>
                                <input type="checkbox" name="checkbox" value="โสด">การ์ตูน &nbsp;
                                <input type="checkbox" name="checkbox" value="มีแฟนแล้ว">เล่นเกม &nbsp;
                                <input type="checkbox" name="checkbox" value="มีแฟนแล้ว">อ่านหนังสือ &nbsp;
                                <input type="checkbox" name="checkbox" value="มีแฟนแล้ว">เล่นกีฬา <br>
                            </div>
                            <br>
                            <div class="form-group">
                            <label>จังหวัด</label>
                            <select  class="form-control" name="select" style="width:200px">
                                    <option value="" selected>--- เลือกจังหวัด ---</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กระบี่">กระบี่ </option>
                                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                    <option value="จันทบุรี">จันทบุรี</option>
                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                    <option value="ชัยนาท">ชัยนาท </option>
                                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                                    <option value="ชุมพร">ชุมพร </option>
                                    <option value="ชลบุรี">ชลบุรี </option>
                                    <option value="เชียงใหม่">เชียงใหม่ </option>
                                    <option value="เชียงราย">เชียงราย </option>
                                    <option value="ตรัง">ตรัง </option>
                                    <option value="ตราด">ตราด </option>
                                    <option value="ตาก">ตาก </option>
                                    <option value="นครนายก">นครนายก </option>
                                    <option value="นครปฐม">นครปฐม </option>
                                    <option value="นครพนม">นครพนม </option>
                                    <option value="นครราชสีมา">นครราชสีมา </option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                    <option value="นครสวรรค์">นครสวรรค์ </option>
                                    <option value="นราธิวาส">นราธิวาส </option>
                                    <option value="น่าน">น่าน </option>
                                    <option value="นนทบุรี">นนทบุรี </option>
                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                    <option value="ปทุมธานี">ปทุมธานี </option>
                                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                    <option value="ปัตตานี">ปัตตานี </option>
                                    <option value="พะเยา">พะเยา </option>
                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                    <option value="พังงา">พังงา </option>
                                    <option value="พิจิตร">พิจิตร </option>
                                    <option value="พิษณุโลก">พิษณุโลก </option>
                                    <option value="เพชรบุรี">เพชรบุรี </option>
                                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                    <option value="แพร่">แพร่ </option>
                                    <option value="พัทลุง">พัทลุง </option>
                                    <option value="ภูเก็ต">ภูเก็ต </option>
                                    <option value="มหาสารคาม">มหาสารคาม </option>
                                    <option value="มุกดาหาร">มุกดาหาร </option>
                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                    <option value="ยโสธร">ยโสธร </option>
                                    <option value="ยะลา">ยะลา </option>
                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                    <option value="ระนอง">ระนอง </option>
                                    <option value="ระยอง">ระยอง </option>
                                    <option value="ราชบุรี">ราชบุรี</option>
                                    <option value="ลพบุรี">ลพบุรี </option>
                                    <option value="ลำปาง">ลำปาง </option>
                                    <option value="ลำพูน">ลำพูน </option>
                                    <option value="เลย">เลย </option>
                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                    <option value="สกลนคร">สกลนคร</option>
                                    <option value="สงขลา">สงขลา </option>
                                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                    <option value="สระแก้ว">สระแก้ว </option>
                                    <option value="สระบุรี">สระบุรี </option>
                                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                                    <option value="สุโขทัย">สุโขทัย </option>
                                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                    <option value="สุรินทร์">สุรินทร์ </option>
                                    <option value="สตูล">สตูล </option>
                                    <option value="หนองคาย">หนองคาย </option>
                                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                    <option value="อุดรธานี">อุดรธานี </option>
                                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                    <option value="อุทัยธานี">อุทัยธานี </option>
                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                    <option value="อ่างทอง">อ่างทอง </option>
                                    <option value="อื่นๆ">อื่นๆ</option>
                              </select>
                            </div>



                            <div class="form-group">
                                    <label>User</label>
                                    <input type="text" class="form-control"placeholder="ใส่ User" style="width :70%">
                            </div>
                            <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"placeholder="ใส่ Password" style="width :70%">
                            </div>
                            <div class="form-group">
                                    <label>Re-Password</label>
                                    <input type="password" class="form-control"placeholder="ใส่ Re-Password" style="width :70%">
                            </div>
                            <center>
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <a type="button" href="/form_register" class="btn btn-danger">ยกเลิก</a>                      
                            </center>
                            <br>
            </form>
            </div>

@endsection