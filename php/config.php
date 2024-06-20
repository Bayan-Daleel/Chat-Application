<?php
$conn =mysqli_connect("localhost","root","","chatapp");
if(!$conn){
    echo "database connection".mysqli_connect_error();
}
?>