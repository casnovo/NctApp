<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>nctbpp42 : ข่าววิทยุ</title>
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
@media print {
    section {page-break-after: always;}
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
.uline{
border-width:1px;	
border-bottom-style:solid;
}
.para {
font-family: 'THSarabunNew' !important;
font-size:medium;
text-indent: 0px;
margin: -8px 0px 0px 0px;

}
.paras {
font-family: 'THSarabunNew' !important;
font-size:medium;
text-indent: 0px;
margin: 5px 0px 0px 0px;

}
.paras2 {
font-family: 'THSarabunNew' !important;
font-size:medium;

margin: 20px 0px 0px 0px;
text-align:center

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
$uid = $_POST['uid'];
$rsus = $_POST['rsus'];
$rdetiil = $_POST['rdetiil'];
$rplace = $_POST['rplace'];
$rstation = $_POST['rstation'];
$rstationp = $_POST['rstationp'];
$rstationd = $_POST['rstationd'];
$rstationd2 = $_POST['rstationd2'];
$stime = $_POST['stime'];
$sdate = $_POST['sdate'];
$r1 = $_POST['r1'];
$r2 = $_POST['r2'];
$rlm = $_POST['rlm'];
$opc =  $_POST['opc'];
$cid =  $_POST['cid'];
?>
</head>
  <body id = "print1">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
       
    <div class="row">
    	<h2 align="center"><b>วิทยุในราชการสำนักงานตำรวจแห่งชาติ</b></h2>
         <div class="col-xs-12">
         	<p class="paras" style="font-size:20px" ><b>ความเร่งด่วน</b>........................................<b>ชั้นความลับ</b>..................................<b>คำแนะนำในการส่ง</b>..............................</p>
            <?
			
			  $obj = json_decode($cid);
				foreach($obj as $val)
				{
									
       		echo "<p class='paras' style='font-size:20px' ><b>จาก</b>&nbsp;&nbsp;".$val->{'crank'}." ".$val->{'cname'}." ".$opc." "."ผอ.ศป.ปส.กก.ตชด.๔๒</p>" ;
            
            }
			       
			?>
            <p class="paras" style="font-size:20px" ><b>ถึงผู้รับปฏิบัติ</b>&nbsp;&nbsp;ผอ.ศป.ปส.บช.ตชด., ผอ.ศป.ปส.บก.ตชด.ภาค ๔ , ผอ.ศป.ปส.ภ.๘ , ผอ.ปปส.ภ.๘, ศปก.ชด.(ปปส.)</p> 
            <p class="paras" style="font-size:20px" ><b>ผู้รับทราบ</b>&nbsp;&nbsp; ศูนย์ประชาสัมพันธ์  บช.ตชด. , ผบก.ภ.จว.นศ. , ผอ.ศอ.ปส.ทภ.๔</p>
         </div>
          
    </div>
    <div class="row uline">
    <div class="col-xs-6 ">
    <p class="paras" style="font-size:20px" ><b>ที่ ๐๐๓๐.๕๒(ปส.)/</b></p>
    </div>
    <div class="col-xs-6 ">
    <p class="paras" style="font-size:20px" ><b>วันที่</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เดือน&nbsp;<? echo $thaimonth[date("n")]; ?>&nbsp;พ.ศ.๒๕๕๘</p>
    </div>
    </div>
   
   
        <div class="row" align="center">
        <div class="col-xs-12 col-md-12">
        <h3><b>รายงานการจับกุม</b></h3>
        </div>
        </div>
    <div class="row">
        
        <div class="col-xs-12 ">
        	<p class="para" style="font-size:19px" >๑. <b>รับแจ้งจาก</b>แหล่งข่าว สายลับ - ผู้นำท้องถิ่น สืบสวนติดตาม หาข่าวเพิ่มเติม
			
         	</p>
            <p class="para" style="font-size:19px" >๒. <b>เมื่อ</b> <? echo reportDate($rdate,$rtime); ?>
         	</p>
            <p class="para" style="font-size:19px" >๓. <b>เหตุเกิดที่</b>&nbsp;<? echo $rplace; ?>
         	</p>
            <p class="para" style="font-size:19px" >๔. <b>ผู้จับกุม</b>&nbsp;<? echo $rcdetiil; ?>
         	</p>
            <p class="para" style="font-size:19px" >๕. <b>ผู้ต้องหา</b>&nbsp;<? echo toThaiNumber($rsus); ?>&nbsp;คน
         	</p>
            <? 
			  $obj = json_decode($rdetiil);
				foreach($obj as $val)
				{
					echo "<p class='para2' style='font-size:19px' >-&nbsp;".$val->{'first'}."&nbsp; อายุ &nbsp;".toThaiNumber($val->{'age'})."&nbsp;ปี&nbsp;ที่อยู่&nbsp;".$val->{'address'}."</p>";
					 
				}
			       
			?>
            <p class="para" style="font-size:19px" >๖. <b>ของกลาง</b>&nbsp;
         	</p>
            <? 
			  $obj = json_decode($r1);
				foreach($obj as $val)
				{
					echo "<p class='para2' style='font-size:19px' >-&nbsp;".$val->{'efn'}."&nbsp; จำนวน &nbsp;".toThaiNumber($val->{'cost'})." ".$val->{'counts'}."</p>";
					 
				}
			       
			?>
            <p class="para" style="font-size:19px" >๗. <b>โดยกล่าวหาว่า</b>&nbsp;
            </p>
            <? 
			$data = explode(",",$rlm);
			foreach ($data as $value) {
    			echo "<p class='para2' style='font-size:19px' >-&nbsp;".$value."</p>";
			}
			?>
            <? 
			$data = explode(",",$rstationd);
			?>          
            <p class="para" style="font-size:19px" >๘. <b>นำของกลางส่ง</b>&nbsp;พงส.สภ.<? echo $rstation."&nbsp;จังหวัด&nbsp;".$rstationp."&nbsp;ตาม ปจว.ข้อที่&nbsp;".toThaiNumber($data[0])."    &nbsp;เวลา&nbsp;".thaiTime($stime)."&nbsp;ลง&nbsp;".thaiDate($sdate)."&nbsp;คดีอาญาที่&nbsp;".toThaiNumber($data[1])."&nbsp;ยึดทรัพย์ที่&nbsp;".toThaiNumber($data[2])."&nbsp;โดยมี&nbsp;".    $rstationd2."&nbsp; เป็น พงส./ร้อยเวร"; ?>
            </p>
            <p class="para" style="font-size:19px" >๙. <b>ปฏิบัติการตามคำสั่ง</b>&nbsp;ปฏิบัติตามคำสั่ง ปฏิบัติการระดมกวาดล้างปราบปรามอาชญากรรมสำคัญ ของ บช.ตชด.หมายอ้างสาสน์           ปอ.๐๒๔๕
            </p>
        </div>
    </div>
    

    <div class="row">
            <div class="col-xs-6"></div>
        	<div class="col-xs-6">
            
     <?
			
			  $obj = json_decode($cid);
				foreach($obj as $val)
				{
echo "<p class='para3' style='font-size:19px'>".$val->{'crank'}."</p>";
echo "<p class='para3' style='font-size:19px ; text-indent: 45px; margin: 0cm 0cm 0cm 0cm;'>".$opc."&nbsp;ผอ.ศป.ปส.กก.ตชด.๔๒</p>";
echo "<p class='para3' style='font-size:19px; text-indent: 120px; margin: 0cm 0cm 0cm 0cm;'>".$tsm[date("n")]."๕๘</p>";

            }
			       
			?>

  
</div>
    </div>
         
         
       

        
      </section><!-- /.content -->
            <section class="invoice">
       
    <div class="row">
    	<h2 align="center"><b>วิทยุในราชการสำนักงานตำรวจแห่งชาติ</b></h2>
         <div class="col-xs-12">
         	<p class="paras" style="font-size:20px" ><b>ความเร่งด่วน</b>........................................<b>ชั้นความลับ</b>..................................<b>คำแนะนำในการส่ง</b>..............................</p>
            <?
			
			  $obj = json_decode($cid);
				foreach($obj as $val)
				{
									
       		echo "<p class='paras' style='font-size:20px' ><b>จาก</b>&nbsp;&nbsp;".$val->{'crank'}." ".$val->{'cname'}." ".$opc." "."ผอ.ศป.ปส.กก.ตชด.๔๒</p>" ;
            
            }
			       
			?>
            <p class="paras" style="font-size:20px" ><b>ถึงผู้รับปฏิบัติ</b>&nbsp;&nbsp;ผอ.ศป.ปส.บช.ตชด., ผอ.ศป.ปส.บก.ตชด.ภาค ๔ , ผอ.ศป.ปส.ภ.๘ , ผอ.ปปส.ภ.๘, ศปก.ชด.(ปปส.)</p> 
            <p class="paras" style="font-size:20px" ><b>ผู้รับทราบ</b>&nbsp;&nbsp; ศูนย์ประชาสัมพันธ์  บช.ตชด. , ผบก.ภ.จว.นศ. , ผอ.ศอ.ปส.ทภ.๔</p>
         </div>
          
    </div>
    <div class="row uline">
    <div class="col-xs-6 ">
    <p class="paras" style="font-size:20px" ><b>ที่ ๐๐๓๐.๕๒(ปส.)/</b></p>
    </div>
    <div class="col-xs-6 ">
    <p class="paras" style="font-size:20px" ><b>วันที่</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เดือน&nbsp;<? echo $thaimonth[date("n")]; ?>&nbsp;พ.ศ.๒๕๕๘</p>
    </div>
    </div>
   
   
        <div class="row" align="center">
        <div class="col-xs-12 col-md-12">
        <h3><b>รายงานการจับกุม</b></h3>
        </div>
        </div>
    <div class="row">
        
        <div class="col-xs-12 ">
        	<p class="para" style="font-size:19px" >๑. <b>รับแจ้งจาก</b>แหล่งข่าว สายลับ - ผู้นำท้องถิ่น สืบสวนติดตาม หาข่าวเพิ่มเติม
			
         	</p>
            <p class="para" style="font-size:19px" >๒. <b>เมื่อ</b> <? echo reportDate($rdate,$rtime); ?>
         	</p>
            <p class="para" style="font-size:19px" >๓. <b>เหตุเกิดที่</b>&nbsp;<? echo $rplace; ?>
         	</p>
            <p class="para" style="font-size:19px" >๔. <b>ผู้จับกุม</b>&nbsp;<? echo $rcdetiil; ?>
         	</p>
            <p class="para" style="font-size:19px" >๕. <b>ผู้ต้องหา</b>&nbsp;<? echo toThaiNumber($rsus); ?>&nbsp;คน
         	</p>
            <? 
			  $obj = json_decode($rdetiil);
				foreach($obj as $val)
				{
					echo "<p class='para2' style='font-size:19px' >-&nbsp;".$val->{'first'}."&nbsp; อายุ &nbsp;".toThaiNumber($val->{'age'})."&nbsp;ปี&nbsp;ที่อยู่&nbsp;".$val->{'address'}."</p>";
					 
				}
			       
			?>
            <p class="para" style="font-size:19px" >๖. <b>ของกลาง</b>&nbsp;
         	</p>
            <? 
			  $obj = json_decode($r1);
				foreach($obj as $val)
				{
					echo "<p class='para2' style='font-size:19px' >-&nbsp;".$val->{'efn'}."&nbsp; จำนวน &nbsp;".toThaiNumber($val->{'cost'})." ".$val->{'counts'}."</p>";
					 
				}
			       
			?>
            <p class="para" style="font-size:19px" >๗. <b>โดยกล่าวหาว่า</b>&nbsp;
            </p>
            <? 
			$data = explode(",",$rlm);
			foreach ($data as $value) {
    			echo "<p class='para2' style='font-size:19px' >-&nbsp;".$value."</p>";
			}
			?>
            <? 
			$data = explode(",",$rstationd);
			?>          
            <p class="para" style="font-size:19px" >๘. <b>นำของกลางส่ง</b>&nbsp;พงส.สภ.<? echo $rstation."&nbsp;จังหวัด&nbsp;".$rstationp."&nbsp;ตาม ปจว.ข้อที่&nbsp;".toThaiNumber($data[0])."    &nbsp;เวลา&nbsp;".thaiTime($stime)."&nbsp;ลง&nbsp;".thaiDate($sdate)."&nbsp;คดีอาญาที่&nbsp;".toThaiNumber($data[1])."&nbsp;ยึดทรัพย์ที่&nbsp;".toThaiNumber($data[2])."&nbsp;โดยมี&nbsp;".    $rstationd2."&nbsp; เป็น พงส./ร้อยเวร"; ?>
            </p>
            <p class="para" style="font-size:19px" >๙. <b>ปฏิบัติการตามคำสั่ง</b>&nbsp;ปฏิบัติตามคำสั่ง ปฏิบัติการระดมกวาดล้างปราบปรามอาชญากรรมสำคัญ ของ บช.ตชด.หมายอ้างสาสน์           ปอ.๐๒๔๕
            </p>
        </div>
    </div>
    

    <div class="row">
            <div class="col-xs-6"></div>
        	<div class="col-xs-6">
            
     <?
			
			  $obj = json_decode($cid);
				foreach($obj as $val)
				{
echo "<p class='para3' style='font-size:19px'>".$val->{'crank'}."</p>";
echo "<p class='para3' style='font-size:19px ; text-indent: 45px; margin: 0cm 0cm 0cm 0cm;'>".$opc."&nbsp;ผอ.ศป.ปส.กก.ตชด.๔๒</p>";
echo "<p class='para3' style='font-size:19px; text-indent: 120px; margin: 0cm 0cm 0cm 0cm;'>".$tsm[date("n")]."๕๘</p>";

            }
			       
			?>

  
</div>
    </div>
         
         
       


    
    </div>
        
      </section><!-- /.content -->
    </div><!-- ./wrapper -->
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>