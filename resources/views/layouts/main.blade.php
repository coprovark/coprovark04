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
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                                <a href="/form_loginSTD"><i class="fa fa-home"></i> หนักแรก</a>
                            </li>
                            <li>
                                <a href="/form_loginSTD"><i class="fa fa-file-text"></i> เข้าสู่ระบบ</a>
                            </li>
                            <li>
                                <a href="/form_registerSTD"><i class="fa fa-paste"></i> สมัครสมาชิก</a>
                            </li>
                            <li>
                                <a href="/list_users"><i class="fa fa-dedent"></i> สมาชิก</a>
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
<footer class="bs-docs-footer" style="background-color:#111111; margin:0px 0px 0px 0px; color: white;">
	<div class="container" style="text-align: center;">		
	    <p class="float-right" style="margin-top:5px;">
			<!-- <a title="go to top" href="#"><img  src="image2/topto.png"  width="35" height="35"></a> -->
        </p> 	
        <marquee  class="Red12Bold" style="padding:0px 0px 0px 0px;">
        Copyright © 2018 StudentFORM.co, LTD. ALL RIGHTS RESERVED.
        </marquee>	
	</div>
</footer>
    <!-- jQuery -->
    <script src="js/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- date -->
    <script language="javascript">
    function calAge(o)
    {
        var tmp = o.value.split("-");
        var current = new Date();
        var current_year = current.getFullYear();
        document.getElementById("age").value = current_year - tmp[0];
    }       
    </script>


</body>

</html>
