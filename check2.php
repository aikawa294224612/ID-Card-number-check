<?php 
checkID();

function checkID(){
	$headPoint = array(
		'A'=>1,'I'=>39,'O'=>48,'B'=>10,'C'=>19,'D'=>28,
		'E'=>37,'F'=>46,'G'=>55,'H'=>64,'J'=>73,'K'=>82,
		'L'=>2,'M'=>11,'N'=>20,'P'=>29,'Q'=>38,'R'=>47,
		'S'=>56,'T'=>65,'U'=>74,'V'=>83,'W'=>21,'X'=>3,
		'Y'=>12,'Z'=>30
	);
	$alpha=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T',
	'U','V','W','X','Y','Z');
	$getalpha=$alpha[rand(0,25)];
	$loca=$headPoint[$getalpha];
	$sex = array(1,2);
	$getsex=$sex[rand(0,1)];
	$random1=rand(1,9);
	$random2=rand(1,9);
	$random3=rand(1,9);
	$random4=rand(1,9);
	$random5=rand(1,9);
	$random6=rand(1,9);
	$random7=rand(1,9);
	$result=10-(($loca+$getsex*8+$random1*7+$random2*6+$random3*5+$random4*4+$random5*3+$random6*2+$random7*1)%10) ;
	 if($result==10){
		 $end=0;
	 }else{
		 $end=$result;
	 }
	echo $getalpha.$getsex.$random1.$random2.$random3.$random4.$random5.$random6.$random7.$end;
	} 

?>  
