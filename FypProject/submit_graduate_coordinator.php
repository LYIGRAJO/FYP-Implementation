 <?php
require('db_connect.php');

if (isset($_POST['submit']) )

 

{

 

$regstudents1=$_POST["REG_STUDENTS"];
$acceptedstudents1=$_POST["ACCEPTED_STUDENTS"];
$rejectedstudents1=$_POST["REJECTION"];
$comments1=$_POST["COMMENTS"];





$sql = "INSERT INTO graduate_cordinator (REGI_STUDENTS, ACCEPTED_STUDENTS, REJECTED_STUDENTS,COMMENT)
VALUES ('$regstudents1', '$acceptedstudents1', '$rejectedstudents1', '$comments1')";

if (mysqli_query($connection, $sql))
 {
    echo "New record created successfully";
} else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


}
?> 