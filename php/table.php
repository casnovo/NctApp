<?php
// get the q parameter from URL
$q = $_REQUEST["q"];
//$q = 5 ;
$i = 0 ;

while($i < $q){
$j = $i+1;
echo "<div class='form-group'>";
echo "<label>";
echo $j.". ชื่อ - นามสกุล";
echo "</label>";
echo "<input type='text' name='first_name".$j."' id='first_name".$j."'  class='form-control' />";
echo "</div>";
echo "<div class='form-group'>";
echo "<label>";
echo "อายุ";
echo "</label>";
echo "<input type='text' name='age".$j."' id='age".$j."'  class='form-control' />";
echo "</div>";
echo "<div class='form-group'>";
echo "<label>";
echo "ที่อยู่"; 
echo "</label>";
echo "<input type='text' name='address".$j."' id='address".$j."'  class='form-control' />";
echo "</div>";
    echo "<div class='form-group'>";
echo "<label>";
echo "เพศ"."</br>  ";
echo "</label>";
echo  "<label class='radio-inline'>";
echo  "<input type='radio' name='optradio' id='sex".$j."' value='ชาย' /> ชาย";
echo  "</label>";
echo  "<label class='radio-inline'>";
echo  "<input type='radio' name='optradio' id='sex".$j."' value='หญิง' /> หญิง";
echo  "</label>";
    echo "</div>";

$i++;
}
?>
