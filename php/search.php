<?php
include_once 'config.php';
$serchItem=mysqli_real_escape_string($conn,$_POST['searchTerm']);
$output="";
$sql=mysqli_query($conn,"SELECT * FROM users WHERE fname like '%{$serchItem}%' or lname like '%{$serchItem}%'");
 if(mysqli_num_rows($sql)>0){
   include 'data.php';
 }else{
    $output.='No user found related to your search term';
 }

echo $output;
?>