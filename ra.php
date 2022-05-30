<?php
$conn = mysqli_connect('localhost','root','','stdform');
if($conn)
{
    echo "connected";
}
else{
    echo "NOt connected";
}
?>