
<?php
require('db_connect.php');

if (isset($_POST['submit']) )

 

{

 

$START=$_POST["START_DATE"];
$END=$_POST["END_DATE"];
$PROJECT_ID=$_POST["PROJECT_ID"];
$CATEGORY=$_POST["CATEGORY"];
$DESCRIPTION=$_POST["DESCRIPTION"];
$REG_NO=$_POST["REG_NO"];
$STAFF_ID=$_POST["STAFF_ID"];
$DURATION=$END-$START;

echo $DURATION;



$sql="INSERT INTO PROJECT (PROJECT_ID,DURATION,CATEGORY,DESCRIPTION,REG_NO,STAFF_ID,START_DATE,END_DATE,TITLE,DEPT,AMOUNT,FUNDER)

VALUES

('$PROJECT_ID','$DURATION','$CATEGORY','$DESCRIPTION','$REG_NO','$STAFF_ID','$START','$END',,'$TITLE','$DPET','$AMOUNT',,'$FUNDER')";

if (!mysqli_query($connection,$sql))

  {

  die('Error: ' . mysqli_error($connection));

  }
else {echo "data inserted successfull";}



 }




?>

