<?php
session_start();
include_once 'config.php';

$fname =mysqli_real_escape_string($conn , $_POST['fname']);
$lname =mysqli_real_escape_string($conn , $_POST['lname']);
$email =mysqli_real_escape_string($conn , $_POST['email']);
$password =mysqli_real_escape_string($conn , $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $sql=mysqli_query($conn ,"SELECT * from users where email= '{$email}'");
    if (mysqli_num_rows($sql)>0){
       echo "$email - this email is alredy exist !";
    }
    else{
       if(isset($_FILES['image'])){
         $imge_name=$_FILES['image']['name'];
         $imge_type=$_FILES['image']['type'];
         $tmp_name=$_FILES['image']['tmp_name'];
         $imge_explode =explode('.',$imge_name);
         $img_txt=end($imge_explode);
         $extensions=['jpeg','png','jpg'];


         if(in_array($img_txt,$extensions)==true) {
           $types = ["image/jpeg", "image/jpg", "image/png"];
           $time=time();
           $new_img_name= $time.$imge_name;
           move_uploaded_file($tmp_name,"../images/".$new_img_name);
           $status="Active now";
           $encrypt_pass = md5($password);
           $random_id=rand(time(),10000000);
           $sql2=mysqli_query($conn," INSERT INTO  users (unique_id,fname,lname,email,password, img,status) VALUES ({$random_id},'{$fname}','{$lname}','{$email}','{$encrypt_pass}','{$new_img_name}','{$status}')");
          if($sql2){
              $sql3=mysqli_query($conn,"select * from users where email = '{$email}'");
               if(mysqli_num_rows($sql3)>0){
              $row =mysqli_fetch_assoc( $sql3);
              $_SESSION['unique_id']=$row['unique_id'];
              echo "success";
            }
        }
          else{

          }
        
        }  
         else{
            echo "please select image file - jpeg , png ,jpg";
         }  
    }
    else{
       echo "please select an image file!";
      }
    }
 }else{
    echo $email . "this email not valid " ;
   }
} else{
    echo "All input field are required ";
}
      
?>
