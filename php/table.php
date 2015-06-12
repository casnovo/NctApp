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
echo "<input type='text' name='first_name".$j."' id='first_name".$j."' data-rule-required='true' data-msg-required='Required' data-placement='bottom' class='form-control' />";
echo "</div>";
echo "<div class='form-group'>";
echo "<label>";
echo "อายุ";
echo "</label>";
echo "<input type='text' name='age".$j."' id='age".$j."' data-rule-required='true' data-msg-required='Required' data-placement='bottom' class='form-control' />";
echo "</div>";
echo "<div class='form-group'>";
echo "<label>";
echo "ที่อยู่"; 
echo "</label>";
echo "<input type='text' name='address".$j."' id='address".$j."' data-rule-required='true' data-msg-required='Required' data-placement='bottom' class='form-control' />";
echo "</div>";
echo "<div class='form-group'>";
echo "<label>";
echo "เพศ"; 
echo "</label>";
echo "<input type='text' name='sex".$j."' id='sex".$j."' data-rule-required='true' data-msg-required='Required' data-placement='bottom' class='form-control' />";
echo "</div>";

$i++;
}
?>
