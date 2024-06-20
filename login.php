<?php 
include_once "header.php";
?>
<body>
    <div class="wrapper">
     <section class="form login">
        <header >
        Real time chat App
       </header>
        <form  action="#">
            <div class="error-text"></div> 
                 <div class="field input">
                    <label>Email Adress</label> 
                   <input type="email" name="email" placeholder=""Enter Your email">
                 </div>
                 <div class="field input">
                    <label>Password</label> 
                   <input type="password" name="password" placeholder=""Password">
                <i class="fas fa-eye"></i>
                  </div>
                 <div class="field button"> 
                    <input type="submit" value="Log in">
                 </div>
        </form>
        <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
     </section>
    </div>
    <script src="javascript/login.js"></script>
    <script src="javascript/pass-show-hide.js"></script>
</body>
</html>