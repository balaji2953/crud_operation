<?php

 $stu_name = $_POST['sname'];
 $stu_10 = $_POST['s10'];
 $stu_12 = $_POST['s12'];
 $stu_dep = $_POST['department'];

$conn = mysqli_connect("localhost","root","","admission") or die("Connection Failed");

$sql = "INSERT INTO student(sname,s10,s12,department) VALUES ('{$stu_name}','{$stu_10}','{$stu_12}','{$stu_dep}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/admission_crud/index.php");

mysqli_close($conn);

?>
