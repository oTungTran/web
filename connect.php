<?php
$conn_string="host="
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$username = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass'".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if($row==1)
{
	echo "Login success";
}
else
{
	echo "Login Failed";
}
?>