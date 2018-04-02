<!DOCTYPE html>
<html lang="en">

<head >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>webapp</title>




    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/css/bootstrap.min.css') }}">

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/metisMenu/metisMenu.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/sb-admin-2.css') }}">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}">
    

    <!-- Gid -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300">


</head>
<style>
a {
    color:black;
}
table, th, td {
		color : black ;  
		border: 1px solid black;;
		border-collapse: collapse;
		padding: 8px 20px;
		background-color: white;	
	}
footer{
    margin-bottom : 10 px;
    position : fixed;
    letf : 0;
    bottom : 0;
    width : 100%;

}
/* .container{
    border : 1px solid black;
} */
</style>

<body style="font-family: 'Kanit', sans-serif;">

    <div id="wrapper" >

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:#3366ff;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <b><a class="navbar-brand" style="color:black;font-size:25px;" href="/form_loginSTD">ระะบบกรอกข้อมูลนักศึกษาออนไลน์</a></b>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse"  >
                    <ul class="nav" id="side-menu"  >
                            <li>
                                <a href="/form_loginSTD"><i class="fa fa-file-text"></i> เข้าสู่ระบบ</a>
                            </li>
                            <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> ข้อมูล Gallery<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="/co_main_show">co_main</a>
                                </li>
                                <li>
                                    <a href="/co_blood_show">co_blood</a>
                                </li>  
                                <li>
                                    <a href="/co_branch_show">co_branch</a>
                                </li>
                                <li>
                                    <a href="/co_citizenship_show">co_citizenship</a>
                                </li>  
                                <li>
                                    <a href="/show_faculty">co_faculty</a>
                                </li>
                                <li>
                                    <a href="/co_gender_show">co_gender</a>
                                </li>  
                                <li>
                                    <a href="/co_institution_show">co_institution</a>
                                </li>
                                <li>
                                    <a href="/co_level_show">co_level</a>
                                </li>  
                                <li>
                                    <a href="/co_nationality_show">co_nationality</a>
                                </li>
                                <li>
                                    <a href="/co_religion_show">co_religion</a>
                                </li>                              
                                <li>
                                    <a href="/co_status_show">co_status</a>
                                </li>
                                <li>
                                    <a href="/co_style_show">co_style</a>
                                </li>  
                                <li>
                                    <a href="/co_titlename_show">co_titlename</a>
                                </li>
                                <li>
                                    <a href="/co_tpyestudent_show">co_tpyestudent</a>
                                </li>  
                                <li>
                                    <a href="/co_typeuser_show">co_typeuser</a>
                                </li>
                                <li>
                                    <a href="/co_user_show">co_user</a>
                                </li>   -->
                            
                            <li>
                                    <a href="/Gallery"><i class="fa fa-paste"></i> สร้างGallery</a>
                                </li>
                                <li>
                                    <a href="/show_Gallery"><i class="fa fa-paste"></i> แสดงGallery</a>
                                </li>
                                <li>
                                    <a href="/show_File"><i class="fa fa-paste"></i> แสดงไฟล์ทั้งหมดใน Gallery</a>
                            </li>
                            </ul>                      
                            </li>
                            <li>
                                <a href="/co_register"><i class="fa fa-paste"></i> ใบสมัครงาน</a>
                            </li>
                            <li>
                                <a href="/show_register"><i class="fa fa-dedent"></i> ราชื่อผู้สมัคงาน</a>
                            </li>
                            
                            <!-- <li>
                                <a href="/form_registerSTD"><i class="fa fa-paste"></i> สมัครสมาชิก</a>
                            </li>
                            <li>
                                <a href="/list_users"><i class="fa fa-dedent"></i> สมาชิก</a> -->
                            </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper" style="background-color:#cecece;">
            <div class="container-fluid" >
                <div class="row" >
                    <div class="col-lg-12">
                        <br>

                    @yield('content')    

                </div>
                <!-- /.row -->
                </div>
            <!-- /.container-fluid -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- <footer class="bs-docs-footer" style="background-color:#111111; margin:0px 0px 0px 0px; color: white;">
	<div class="container" style="text-align: center;">		
	    <p class="float-right" style="margin-top:5px;"> -->
			<!-- <a title="go to top" href="#"><img  src="image2/topto.png"  width="35" height="35"></a> -->
        <!-- </p> 	
        <marquee  class="Red12Bold" style="padding:0px 0px 0px 0px;">
        Copyright © 2018 StudentFORM.co, LTD. ALL RIGHTS RESERVED.
        </marquee>	
	</div>
</footer> -->
    <!-- jQuery -->
    <script src="js/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- date -->
    <script>//โชว์รูปตอน input
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                if(input.files[0].type == 'image/jpeg' || input.files[0].type == 'image/png' ){
                    $('#view').attr('src', e.target.result);
                }else{
                    alert('รูปแบบไฟล์ไม่ถูกต้อง');
                    $('#pathphoto').val('');
                    $('#view').attr('src', 'images/icon_blank.png');               
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#pathphoto").change(function() {
        readURL(this);
    });
</script>
    <script language="javascript">
    function calAge(o)
    {
        var tmp = o.value.split("-");
        var current = new Date();
        var current_year = current.getFullYear();
        document.getElementById("age").value = current_year - tmp[0];
    }       
    </script>
    <!-- ลบข้อมูลในฐาน -->
    <script>
		function _confirm(co_id){
			if(confirm ('ยืนยันการลบ')){
				window.location.href = 'deleteCo_register/'+co_id;
			}
		}
		
	</script>


</body>

</html>
