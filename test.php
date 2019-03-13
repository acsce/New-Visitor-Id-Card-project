<?php

/* JPEGCam Test Script */
/* Receives JPEG webcam submission and saves to local file. */
/* Make sure your directory has permission to write files as your web server user! */

$userName = '';
if(isset($_REQUEST['un'])){
	$userName = addslashes($_REQUEST['un']);
}

$toMeet = '';
if(isset($_REQUEST['mt'])){
	$toMeet = addslashes($_REQUEST['mt']);
}
$comingFrom = '';
if(isset($_REQUEST['ra'])){
	$comingFrom = addslashes($_REQUEST['ra']);
}
$mobile = '';
if(isset($_REQUEST['mn'])){
	$mobile = $_REQUEST['mn'];
}
$email = '';
if(isset($_REQUEST['em'])){
	$email = $_REQUEST['em'];
}
$timeInSec = time();
$currtime = date('Y-m-d H:i:s',$timeInSec);
$currGMTime = date('Y-m-d H:i:s',($timeInSec+19800));
$status = 1;
$con = mysqli_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"visitorinfo");

$sql = "INSERT INTO visitorinfo(firstname,tomeet,comingfrom,mobile,emailid,checkin,status)values('$userName','$toMeet','$comingFrom','$mobile','$email','$currtime','$status')";

// Execute query
mysqli_query($con,$sql);
$id = mysqli_insert_id($con);
mysqli_close($con);

$result = file_put_contents( $id, file_get_contents('php://input') );

if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}

$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $id;
if($comingFrom != 'Family')
	//$comingFrom .= "(Escort required)";  
print "<root><urlsrc>$url</urlsrc><id>$id</id><fname>$userName</fname><tomeet>$toMeet</tomeet><comingfrom>$comingFrom</comingfrom><mobile>$mobile</mobile><email>$email</email><checkin>$currGMTime</checkin><status>$status</status>";

?>
