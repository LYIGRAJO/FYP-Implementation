<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass']))
{
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `STAFF` WHERE STAFFID='$username' and PASSWORD='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1)
{
	 if($username=="2016-04-02333")
{
	echo "<script type='text/javascript'>window.location = 'undergraduate.html'</script>";
}
//echo "Login Credentials verified";
elseif ($username=="2016-04-07576") 
{
	echo "<script type='text/javascript'>window.location = 'Postgraduate.html'</script>";
}
elseif ($username=="2016-04-02334") 
{
	echo "<script type='text/javascript'>window.location = 'Examination.html'</script>";
}
elseif ($username=="2016-04-02335") 
{
	echo "<script type='text/javascript'>window.location = 'staff.html'</script>";
}
}
else
{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>