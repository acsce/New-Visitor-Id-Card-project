<?php
$strQuery = "SELECT vi.id,vi.firstname,vi.tomeet,vi.companyname,vi.comingfrom,vi.mobile,vi.emailid,vi.checkin,vi.checkout,vi.status FROM visitorinfo vi";

//Checking the condition for Date field
if( $_POST['DATE1'] != "DD/MM/YYYY" || $_POST['DATE2'] != "DD/MM/YYYY" )
{
	$s_date    = $_POST['DATE1'];
	$s_time    = ($_POST['starttime']=='')?'00':$_POST['starttime'];
	$s_date = explode('/',$s_date);
	$str_sdate = $s_date[2]."-".$s_date[1]."-".$s_date[0];

	$e_date    = $_POST['DATE2'];
	$e_time    = ($_POST['endtime']=='')?'23:59:59':($_POST['endtime']==24)?'23:59:59':$_POST['endtime'].':00:00';

	$e_date = explode('/',$e_date);
	$str_edate = $e_date[2]."-".$e_date[1]."-".$e_date[0];

	if(($str_sdate != "YYYY-MM-DD"))
	{
		$str_sdate = $str_sdate . " $s_time:00:00";
		$datesecond = strtotime($str_sdate);			
		$unixdate = $datesecond;
		$unixdate  = date("Y-m-d H:i:s",$unixdate);
		$strQuery .= " where vi.checkin>= '".$unixdate."'";
	}

	if(($str_edate != "YYYY-MM-DD"))
	{
		$str_edate = $str_edate . " $e_time";
		$datesecond = strtotime($str_edate);
		$unixdate = $datesecond;
		$unixdate  = date("Y-m-d H:i:s",$unixdate);
		$strQuery .= " and vi.checkin<='".$unixdate."'" ;
	}
}


function show_table()
{
 GLOBAL $strQuery_save_file,$strCountry,$company,$tid,$s_date,$requesttype,$saveFileURL;
if(isset($_REQUEST['saveas']))
	{
    	echo "
		      <table>
		             <tr>
		                 <td>
		                     <form method='POST' action='$saveFileURL'  name = 'schedule_info'>
		                           <b>Enter File Name&nbsp;&nbsp;</b><input type = 'text'  name='filename'>
		                           <!--<input type='hidden' value=\"$strCountry\"  name ='strCountry'>-->
									             <input type='hidden' value=\"$strQuery_save_file\"  name ='strQuery'>
                               <input type='hidden' value=\"$tid\"  name ='tid'>
                               <input type='hidden' value=\"$s_date[2]\"  name ='s_date'>
									             <input type='hidden' value=\"$requesttype\"  name ='rt'>
                               <input type='Submit' value='Save As'>
		                     </form>
		                 </td>
		             </tr>
		      </table>";
		       exit();
    }
}



$count = 0;
$strResult = '';
$con = mysqli_connect("localhost","root","");

if (!$con)
{
  die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"visitorinfo");

// Execute query
$result = mysqli_query($con,$strQuery);

while ($row = mysqli_fetch_object($result)) {
	$count++;
	
	$visitorid = $row->id;
	$firstname = $row->firstname;
	$tomeet = $row->tomeet;
	$companyname = $row->companyname;
	$comingfrom = $row->comingfrom;
	$mobile = $row->mobile;
	$email = $row->emailid;
	$checkin = $row->checkin;
	$checkout = $row->checkout;
	if($row->status == 1)
		$status = 'in';
	else
		$status = 'out';

	$strResult .= "{sno:$count,visitorid:$visitorid,firstname:\"$firstname\",tomeet:\"$tomeet\",companyname:\"$companyname\",comingfrom:\"$comingfrom\",emailid:\"$email\",mobile:\"$mobile\",checkin:\"$checkin\",checkout:\"$checkout\",status:\"$status\"},";

}
$strResult = substr($strResult,0,strlen($strResult)-1);
echo '{"total":"'.$count.'","results":['.$strResult.']}';
mysqli_free_result($result);

// some code
mysqli_close($con);

?>
