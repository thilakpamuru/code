<?php
require_once 'ra.php';
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$rno = $_POST['rno'];
$Message = $_POST['Message'];

$insert = "insert into stdform(Username , Password,Email,rno,Message) values ('$Username','$Password','$Email','$rno','$Message')";
$run_query = mysqli_query($conn,$insert);
if($run_query)
{
    echo 'registered sucessfully';
}
else
{
    echo 'not success';
}
 
?>