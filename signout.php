<?php
$vid = 0;
if(isset($_REQUEST['vid'])){
	$vid = $_REQUEST['vid'];
}else{
	echo 'visitor id is empty';
	exit(0);
}

$con = mysqli_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"visitorinfo");
$timeInSec = time();
$currtime = date('Y-m-d H:i:s',$timeInSec);

$sql = "UPDATE visitorinfo set status=0,checkout='$currtime' where id=$vid";

// Execute query
try{
	$result = mysqli_query($con,$sql);
	if(!$result){
		echo 'error';
		exit(0);
	}
	$count = mysqli_affected_rows($con);
	if(!$count){
		echo 'Invalid';
	}else{
		echo $vid;
	}
}catch(Exception $e){
}
mysqli_close($con);

?>