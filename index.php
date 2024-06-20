<?php 
include_once "header.php";
?>
<body>
    <div class="wrapper">
     <section class="form signup">
        <header >
        Real time chat App
       </header>
        <form action="#" enctype="multipart/form-data">
            <div class="error-text"></div> 
            <div class="name-details">
                <div class="field input">
                   <label>First Name</label> 
                  <input type="text" name="fname" placeholder=""First Name"  required >
                </div>
                <div class="field input">
                    <label>Last Name</label> 
                   <input type="text" name="lname" placeholder=""Last Name" required>
                 </div>
                 </div>
                 <div class="field input">
                    <label>Email Adress</label> 
                   <input type="email" name="email" placeholder=""Enter Your email" required>
                 </div>
                 <div class="field input">
                    <label>Password</label> 
                   <input type="password" name="password" placeholder=""Password" required>
                   <i class="fas fa-eye"></i>
                </div>
                 <div class="field image">
                    <label>select Image</label> 
                   <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                 </div>
                 <div class="field button"> 
                    <input type="submit"  value="Continue To Chat">
                 </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">Login now</a></div>
     </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/singup.js"></script>

</body>
</html>