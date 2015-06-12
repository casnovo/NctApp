<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>nctbpp42 : บันทึกข้อความ</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 <style type='text/css'>

@font-face {
  font-family: 'THSarabunNew';
  src: url('../css/webfont/THSarabunNew.eot?#iefix') format('embedded-opentype'),  url('../css/webfont/THSarabunNew.woff') format('woff'), url('../css/webfont/THSarabunNew.ttf') format('truetype'), url('../css/webfont/THSarabunNew.svg#THSarabunNew') format('svg');
  font-weight: normal;
  font-style: normal;
}


h1, h2, h3, h4 { 
font-family: 'THSarabunNew' !important;
font-weight: normal; }
.reg { color:black; background:white; }
.inverse { color:white; background:black; }
.right { background:white; width:30%; float: right; font-family: sans-serif; border: 1px solid black; border-width: 0 0 1px 1px;}
.pcenter {
font-family: 'THSarabunNew' !important;
text-align:center;
}
.para {
font-family: 'THSarabunNew' !important;
font-size:medium;
text-indent: 0px;
margin: 10px 0px 0px 0px;
border-width:1px;	
border-bottom-style:ridge;
}
.paras {
font-family: 'THSarabunNew' !important;
font-size:medium;
text-indent: 0px;
margin: 10px 0px 0px 0px;

}
.paras2 {
font-family: 'THSarabunNew' !important;
font-size:medium;
text-indent: 0px;
margin: 15px 0px 0px 0px;

}
.para2 {
font-family: 'THSarabunNew' !important;

text-indent: 50px;
margin: 0cm 0cm 0cm 0cm;
}
.para3 {
font-family: 'THSarabunNew' !important;

}

</style>
<?
include 'function.php';
$rid = $_POST['rid'];
$rdate = $_POST['rdate'];
$rtime = $_POST['rtime'];
$rcdetiil = $_POST['rcdetiil'];
$rsus = $_POST['rsus'];
$rplace = $_POST['rplace'];
$r1 = $_POST['r1'];
$r2 = $_POST['r2'];
$r3 = $_POST['r3'];

?>
  </head>
  <body id = "print1">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <div class="row">
        <div class="col-xs-4 pull-left"><img src="../dist/img/300px.png" width="60" height="60"  /></div>
        		<div class="col-xs-4">
        		    <div class="row">
                    	<h2 align="center"><b>บันทึกข้อความ</b></h2></div>
        			</div>
        		<div class="col-xs-4">
                </div>
    	</div>
    <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-6">
       		<p class="para" style="font-size:20px" ><b>ส่วนราชการ</b> ศป.ปส.กก.ตชด.๔๒</p>
            <p class="para" style="font-size:20px" ><b>ที่</b></p> 
            <p class="para" style="font-size:20px" ><b>เรื่อง</b>&nbsp;&nbsp; รายงานการจับกุม </p>
         </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
       		<p class="paras" style="font-size:20px" >&nbsp;</p>
            <p class="para" style="font-size:19px" ><b>วันที่</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เดือน&nbsp;&nbsp; <? echo $thaimonth[date("n")]; ?>&nbsp;&nbsp; พ.ศ.๒๕๕๘</p>  
         </div>
    </div>
   
   
        <div class="row">
        <div class="col-xs-12 col-md-12">
        <p class="paras2" style="font-size:19px" >เรียน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผอ.ศป.ปส.กก.ตชด.๔๒</p> 
        </div>
        
    </div>
    <div class="row">
        
        <div class="col-xs-12 ">
        	<p class="para2" style="font-size:19px" >- เมื่อ <? echo reportDate($rdate,$rtime)." "; echo $rcdetiil; ?>&nbsp;ได้ร่วมกันทำการจับกุมผู้ต้องหา&nbsp; <? echo toThaiNumber($rsus); ?>&nbsp;คน พร้อมของกลาง&nbsp;
			<? 
			  $obj = json_decode($r1);
				foreach($obj as $val)
				{
					echo $val->{'efn'}." ".toThaiNumber($val->{'cost'})." ".$val->{'counts'}.", ";
					 
				}
			        echo $r3 ;
			?>
         	</p>
            <p class="para2" style="font-size:19px" >- เหตุเกิดที่&nbsp;&nbsp;&nbsp; <? echo $rplace ; ?>
         	</p>
            <p class="para2" style="font-size:19px" >- เห็นควรรายงานให้หน่วยเหนือทราบ
         	</p>
            <p class="para2" style="font-size:19px" >- เพื่อโปรดพิจารณา
         	</p>
        </div>
    </div>
    

    <div class="row">
        <div class="col-xs-6"></div>
        <div class="col-xs-6"><p class="para3" style="font-size:19px">จ.ส.ต.</p>
  <p class="para3" style="font-size:19px; text-indent: 50px; margin: 0cm 0cm 0cm 0cm;">(เจริญพร ช่างประดิษฐ)</p>
  <p class="para3" style="font-size:19px; text-indent: 45px; margin: 0cm 0cm 0cm 0cm;">จนท.ศป.ปส.กก.ตชด.๔๒</p>
</div>
    </div>
         
         </div>
       

        
      </section><!-- /.content -->
    </div><!-- ./wrapper -->
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>