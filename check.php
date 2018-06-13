<?php 
$getid=$_GET['id'];
checkID($getid);

function checkID($id){
	$headPoint = array(
		'A'=>1,'I'=>39,'O'=>48,'B'=>10,'C'=>19,'D'=>28,
		'E'=>37,'F'=>46,'G'=>55,'H'=>64,'J'=>73,'K'=>82,
		'L'=>2,'M'=>11,'N'=>20,'P'=>29,'Q'=>38,'R'=>47,
		'S'=>56,'T'=>65,'U'=>74,'V'=>83,'W'=>21,'X'=>3,
		'Y'=>12,'Z'=>30
	);
	$multiply = array(8,7,6,5,4,3,2,1);
	if (preg_match("/^[a-zA-Z][1-2][0-9]+$/",$id)&&strlen($id) == 10){
		$stringArray = str_split($id);
		$total = $headPoint[array_shift($stringArray)];
		$point = array_pop($stringArray);
		for($i=0; $i<count($stringArray); $i++){
			$total += $stringArray[$i]*$multiply[$i];
		}
		if(($total%10) == 0){
			$last=0;
		}else{
			$last=10 - ( $total % 10 );
		}
		if ($last != $point) {
			echo '非身分證';
		} else {
			echo '是身分證';
		}
	}  else {
	   echo '非身分證';
	}
}

?>  
