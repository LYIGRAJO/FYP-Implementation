 <?php
require('db_connect.php');
if (isset($_POST['submit']) )

 

{

 

$activity=$_POST["activity"];
$Description=$_POST["Description"];
$academicYear=$_POST["ACADEMIC_YEAR"];



$sql = "INSERT INTO EXAM_CORDINATOR (ACADEMIC_YEAR, DESCRIPTION)
VALUES ('$academicYear', '$Description')";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


}
?> 