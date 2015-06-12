<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Nctbpp42:ศป.ปส.กก.ตชด.42 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
     <!-- Morris charts -->
    <link href="plugins/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 

  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the 
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |  
  |---------------------------------------------------------|
  
  -->
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Nct</b>BPP42</a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>                            
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->                      
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

           
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>necrotic Bpp</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">เมนู</li>
            <!-- Optionally, you can add icons to the links -->
            <li ><a href="starter.php?#"><span>รายงานสรุปสถิติ</span></a><</li>
            <li ><a href="http://nctbpp42.wc.lt/report.php"><span>แบบรายงานข้อมูล</span></a><</li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            รายงานสรุปสถิติ
            <small>ศูนย์ปฏิบัติการป้องกันและปราบปรามยาเสพติด</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>คุณอยู่ที่</a></li>
            <li class="active">แบบรายงาน</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <form data-toggle="validator" role="form" id="myform"><!-- Your Page Content Here -->
         <div class="box box-solid box-primary">
         	  <div class="box-header with-border">
    				<h3 class="box-title">แบบรายงาน</h3>
   			 <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
     		 
   			 </div><!-- /.box-tools -->
 			 </div><!-- /.box-header -->
       
         <div class="box-body">
         	
             	<div class="row">
        			<div class="col-md-4">
                    <div class="box box-solid box-success">
                        	<div class="box-header with-border">
                  				<h3 class="box-title">รายละเอียด</h3>
                            </div><!-- /.box-header -->
                			<div class="box-body">
                    
                    		<div class="form-group has-feedback">
                      		<label>ที่หนังสือรับ</label>
                      		<input type="text" id="rid" class="form-control css-require" placeholder="เลขหนังสือรับ/ปี" data-error="กรุณากรอกเลขหนังสือรับ" />
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    		</div>
                            <div class="form-group">
                            <label>วันที่จับกุม</label>
                				<div class='input-group date' id='rdates'>
                    			<input type='text' class="form-control" data-error="กรุณาระบุวันที่" id='rdate' required />
                    			<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                   				</span>
                				</div>
            				</div>
                            <div class="form-group">
                            <label>เวลาจับกุม</label>
                				<div class='input-group date' id='rtimes'>
                    			<input type='text' class="form-control" data-error="กรุณาระบุเวลา" id='rtime' required />
                    				<span class="input-group-addon">
                        			<span class="glyphicon glyphicon-time"></span>
                    				</span>
                				</div>
            				</div>
                            <div class="form-group">
                      			<label>ชุดจับกุม</label>
                      			<textarea class="form-control" id="rcdetiil" rows="4" placeholder="" data-error="กรุณาใส่ข้อมูลชุดจับกุม" required></textarea>
                    		</div>
                            <div class="form-group">
                      			<label>หน่วยจับกุม</label>
                     			<select class="form-control" id="uid" >
<? 
$meSQL = "SELECT * FROM `unit` ";
$stmt = $meConnect->prepare($meSQL);
$stmt->execute();
while($row = $stmt->fetch( PDO::FETCH_ASSOC )){
echo <<<Q
<option value='$row[uid]'>หน่วย:&nbsp;$row[company]&nbsp;$row[uhead] </option>

Q;
             

        }
$stmt = null ;
?>
                        			
                      			</select>
                    		</div>
                            <div class="form-group ">
                      		<label>ผู้ต้องหา </label>
                      		<input type="text" id="rsus" class="form-control" placeholder="" onkeyup="showHint(this.value)"/>
                    		</div>
                            <div class="form-group ">
                      		<label>เหตุเกิดที่</label>
                      		<input type="text" id="rplace" class="form-control" placeholder="" data-error="กรุณาระบุที่เกิดเหตุ" required/>
                    		</div>
                            <div class="form-group">
                      			<label>โดยกล่าวหาว่า</label>
                      			<textarea class="form-control" id="rlm" rows="4" placeholder="" data-error="กรุณาระบุข้อหา" required></textarea>
                    		</div>
                            <div class="form-group ">
                      		<label>นำของกลางผู้ต้องหาส่ง พงส.สภ.</label>
                      		<input type="text" id="rstation" class="form-control" placeholder="" data-error="กรุณาระบุชื่อสถานี" required/>
                    		</div>
                            <div class="form-group">
                      			<label>จังหวัด</label>
                     			<select class="form-control" id="rstationp">
                        			<option>นครศรีธรรมราช</option>
                        			<option>กระบี่</option>
                        			<option>ภูเก็ต</option>
                        			<option>พังงา</option>
                        			
                      			</select>
                    		</div>
                            <div class="form-group ">
                      		<label>ปจว.ข้อที่,คดีอาญาที่,ยึดทรัพย์ที่,</label>
                      		<input type="text" id="rstationd" class="form-control" placeholder="" data-error="กรุณาระบุรายละเอียด" required/>
                    		</div>
                            <div class="form-group">
                            <label>ลงวันที่</label>
                				<div class='input-group date' id='sdates'>
                    			<input type='text' class="form-control" data-error="กรุณาระบุวันที่" id='sdate' required />
                    			<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                   				</span>
                				</div>
            				</div>
                            <div class="form-group">
                            <label>เวลา</label>
                				<div class='input-group date' id='stimes'>
                    			<input type='text' class="form-control" data-error="กรุณาระบุเวลา" id='stime' required />
                    				<span class="input-group-addon">
                        			<span class="glyphicon glyphicon-time"></span>
                    				</span>
                				</div>
            				</div>
                            <div class="form-group ">
                      		<label>โดยมี เป็น พงส.</label>
                      		<input type="text" id="rstationd2" class="form-control" placeholder="" data-error="กรุณาระบุชื่อ พงส." required/>
                    		</div>
                           <div class="form-group">
                      			<label>ผู้อนุมัติข่าว</label>
                     			<select class="form-control" id="cid" >
<? 
$meSQL = "SELECT * FROM `commander` ";
$stmt = $meConnect->prepare($meSQL);
$stmt->execute();
while($row = $stmt->fetch( PDO::FETCH_ASSOC )){
echo <<<Q
<option value='[{"crank":"$row[crank]","cname":"$row[cname] ","cpos":"$row[cposition]"}]'>$row[crank] $row[cname]</option>

Q;
             

        }
$stmt = null ;
?>
                        			
                      			</select>
                    		</div>
                            <div class="form-group">
                      			
                     			<select class="form-control" id="opc">
                        			<option value="">ผกก.ลงนาม</option>
                        			<option value="รอง ผอ.ฯปรท.">ปฏิบัติราชการแทน</option>
                        			<option value="รอง ผอ.ฯรรท.">รักษาราชการแทน</option>
                        			
                        			
                      			</select>
                    		</div>
                            </div>
                            </div>
                            
                            	
                    </div>
        			<div class="col-md-4" >
                    	<div class="box box-solid box-success">
                        	<div class="box-header with-border">
                  				<h3 class="box-title">ของกลาง</h3>
                            </div><!-- /.box-header -->
                			<div class="box-body" ng-app="">
                          
                    	<div class="form-group">
<? 
$meSQL = "SELECT * FROM `kindevidence` ";
$stmt = $meConnect->prepare($meSQL);
$stmt->execute();
$b=0;
while($row = $stmt->fetch( PDO::FETCH_ASSOC )){
echo <<<Q
<div class="checkbox" >
<label>
<input type="checkbox"  value='{"eid":"$row[eid]","efn":"$row[fname]","counts":"$row[counts]","cost":"{{name$b}}"}'/>
$row[fname]
</label>
<input id ='$row[eid]' type="text" class="form-control" placeholder="$row[counts]" ng-model="name$b"/>
</div>
Q;
$b++;             

        }
 $meConnect= null;
?>
                      		<div class="checkbox">
                        		<label>
                          		<input type="checkbox" id="chk" value='{"eid":"000","efn":"{{av2}}","counts":"{{av3}}","cost":"{{av5}}"}'/>
                          		อื่นๆ
                        		</label>
                        		<input type="text" id="av1" class="form-control" placeholder="ชื่อย่อ" ng-model="av1"/>
                                <input type="text" id="av2" class="form-control" placeholder="ชื่อเต็ม" ng-model="av2"/>
                                <input type="text" id="av3" class="form-control" placeholder="หน่วย" ng-model="av3"/>
                                <input type="text" id="av4" class="form-control" placeholder="ราคา" ng-model="av4"/>
                                <input type="text" id="av5" class="form-control" placeholder="จำนวน" ng-model="av5"/>
                      		</div>
                            <div class="form-group">
                      			<label>ของกลางอื่น</label>
                      			<textarea class="form-control" id="av6" rows="4" placeholder=""></textarea>
                    		</div>


                      
                      	  </div>
                      </div>
                    </div>	
                    </div>
        			<div class="col-md-4" >
                    	<div class="box box-solid box-success">
                			<div class="box-header with-border">
                  			<h3 class="box-title">รายละเอียดผู้ต้องหา</h3>
	               			</div><!-- /.box-header -->
                				<div class="box-body" id ="txtHint">
                 
                				</div><!-- /.box-body -->
                               
              			</div><!-- /.box -->	
                    </div>
        			
         		</div>
           	  
    
         </div>
        <div class="box-footer">
         	<div class="row">
         		<div class="col-md-4">
                <p class="success" ></p>
                </div>
                <div class="col-md-4" align="center">
                  <a class="btn btn-app">
                    <i class="fa fa-save"></i> บันทึก
                  </a>
                    <a class="btn btn-app" id = "btp1" onClick="printData1()">
                    <i class="fa fa-print"></i> พิมพ์บันทึก
                  </a>
                    <a class="btn btn-app" id = "btp2" onClick="printData2()">
                    <i class="fa fa-print"></i> พิมพ์วิทยุ
                  </a>
                  <a class="btn btn-app" id = "btp2" onClick="printData3()">
                    <i class="fa fa-print"></i> พิมพ์วิทยุ(สำเนา)
                  </a>
         		</div>
                <div class="col-md-4">
         		</div>
         	</div>
        </div>
         
         </div>
         <br>
		
         </form>
         <div class="row" >
         <div class="col-md-12" id="success">
              
            </div><!-- /.col -->
         </div> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left --> 
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    
    <!-- jQuery 2.1.3 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <script src="js/reportapp.js"></script>
    <!-- DATA TABES SCRIPT -->
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
    <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="plugins/datetimepicker/moment-with-locales.min.js"></script>
    <script src="plugins/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="plugins/datetimepicker/collapse.js"></script>
    <script src="plugins/datetimepicker/transition.js"></script>

    
    
     <script type="text/javascript">
            $(function () {
                $('#rdates').datetimepicker({ 
                    locale: 'th',
					format: 'YYYY-MM-DD'
					});
				$('#rtimes').datetimepicker({ 
                    locale: 'th',
					format: 'HH:mm'
					});
				$('#sdates').datetimepicker({ 
                    locale: 'th',
					format: 'YYYY-MM-DD'
					});
				$('#stimes').datetimepicker({ 
                    locale: 'th',
					format: 'HH:mm'
					});
            });
        </script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
  </body>
</html>