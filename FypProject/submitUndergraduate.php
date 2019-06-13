 <?php
require('db_connect.php');
if (isset($_POST['submit']) )

 

{

 

$regstudents=$_POST["REG_STUDENTS"];
$acceptedstudents=$_POST["ACCEPTED_STUDENTS"];
$rejectedstudents=$_POST["REJECTION"];
$comments=$_POST["COMMENTS"];
$academicYear=$_POST["ACADEMIC_YEAR"];





$sql = "INSERT INTO UNDER_CORDINATOR (ACADEMIC_YEAR,REG_STUDENTS, ACCEPT_STUDENTS, REJECTION,COMMENTS)
VALUES ('$academicYear','$regstudents', '$acceptedstudents', '$rejectedstudents', '$comments')";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


}
?> 