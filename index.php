<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" hash="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="javascript.js" type="text/javascript"></script>
    <title>Real time chat App</title>
</head>
<body>
    <div class="wrapper">
     <section class="form signup">
        <header >
        Real time chat App
       </header>
        <form action="#">
            <div class="error-text">
                This is an error message!
            </div> 
            <div class="name-details">
                <div class="field input">
                   <label>First Name</label> 
                  <input type="text" name="first_name" placeholder=""First Name">
                </div>
                <div class="field input">
                    <label>Last Name</label> 
                   <input type="text" name="last_name" placeholder=""Last Name">
                 </div>
                 </div>
                 <div class="field input">
                    <label>Email Adress</label> 
                   <input type="email" name="Email" placeholder=""Enter Your email">
                 </div>
                 <div class="field input">
                    <label>Password</label> 
                   <input type="password" name="Password" placeholder=""Password">
                   <i class="fas fa-eye"></i>
                </div>
                 <div class="field image">
                    <label>select Image</label> 
                   <input type="file">
                 </div>
                 <div class="field button"> 
                    <input type="submit" value="Continue To Chat">
                 </div>
        </form>
        <div class="link">Already signed up? <a href="#">Login now</a></div>
     </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
</body>
</html>