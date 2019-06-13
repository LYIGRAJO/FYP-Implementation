 <?php
require('db_connect.php');
if (isset($_POST['submit']) )

 

{

 
$comments=$_POST["COMMENTS"];
$academicYear=$_POST["ACADEMIC_YEAR"];





$sql = "INSERT INTO pt_coordinator (ACADEMIC_YEAR,COMMENTS)
VALUES ('$academicYear','$comments')";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


}
?> 