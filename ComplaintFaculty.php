<?php
session_start();
include("config.php");
if(!isset($_SESSION['fid']))
{
	header("location:index.php");
}
$comp=$_POST['comp'];
$by=$_SESSION['fid'];
$date=date('d-M-Y');
if($comp==NULL)
{
	//ASLDO Nothing
}
else
{
	mysqli_query($techVegan,"INSERT INTO complaints VALUES('','$comp','$by','$date','1')");
	$info="Successfully Submitted Your Complaint ";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Complaint Box</title>
<link href="scripts/styleASL.css" rel="stylesheet" type="text/css" />
</head>

<body>
<span class="head" style="float:left">Welcome To Complaint Box</span>
<span style="float:right;"><a href="logout.php">Logout</a></span><br />
<hr style="clear:both;box-shadow:0px 0px 2px #000;" color="#FF6600" size="2" width="100%"/><br />
<div align="center">
<span class="Subhead">Submit Us Your Complaint</span><br />
<form method="post" action="">
<table cellpadding="3" cellspacing="3" class="formTable">
<tr><td colspan="2" align="center" class="info"><?php echo $info;?></td></tr>
<tr><td class="labels">Complaint : </td><td><textarea name="comp" rows="5" cols="30" class="fields" style="height:70px;"></textarea></td></tr>
<tr><td align="center" colspan="2"><input type="submit" value="SEND" class="button" onclick="return confirm('After Submitting Your Complaint You Will Not Able To Delete or Modify it..');" /></td></tr>
</table>
</form>
<a href="fhome.php">Go Back</a>

</div>
</body>
<!-- 
Designed &amp; Developed by Abhishek Srivastava
-->
</html>