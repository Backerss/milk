<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
   

    <div class="col-lg-12">
    <section id="formHolder">

<div class="row">

   <!-- Brand Box -->
   <div class="col-sm-6 brand">
      <a href="#" class="logo">MR <span>.</span></a>

      <div class="heading">
         <h2>Marina</h2>
         <p>Your Right Choice</p>
      </div>

      <div class="success-msg">
         <p>Great! You are one of our members now</p>
         <a href="#" class="profile">Your Profile</a>
      </div>
   </div>


   <!-- Form Box -->
   <div class="col-sm-6 form">

      <!-- Login Form -->
      <div class="login form-peice switched">
         <form class="login-form" action="#" method="post">
            <div class="form-group">
               <label for="loginemail">Email Adderss</label>
               <input type="email" name="loginemail" id="loginemail" required>
            </div>

            <div class="form-group">
               <label for="loginPassword">Password</label>
               <input type="password" name="loginPassword" id="loginPassword" required>
            </div>

            <div class="CTA">
               <input type="submit" value="Login">
               <a href="#" class="switch">I'm New</a>
            </div>
         </form>
      </div><!-- End Login Form -->


      <!-- Signup Form -->
      <div class="signup form-peice">
         <form class="signup-form" action="#" method="post">

            <div class="form-group">
               <label for="name">Full Name</label>
               <input type="text" name="username" id="name" class="name">
               <span class="error"></span>
            </div>

            <div class="form-group">
               <label for="email">Email Adderss</label>
               <input type="email" name="emailAdress" id="email" class="email">
               <span class="error"></span>
            </div>

            <div class="form-group">
               <label for="phone">Phone Number - <small>Optional</small></label>
               <input type="text" name="phone" id="phone">
            </div>

            <div class="form-group">
               <label for="password">Password</label>
               <input type="password" name="password" id="password" class="pass">
               <span class="error"></span>
            </div>

            <div class="form-group">
               <label for="passwordCon">Confirm Password</label>
               <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
               <span class="error"></span>
            </div>

            <div class="CTA">
               <input type="submit" value="Signup Now" id="submit">
               <a href="#" class="switch">I have an account</a>
            </div>
         </form>
      </div><!-- End Signup Form -->


   </div>
</div>

</section>
    </div>


   <footer>
      <p>
         Form made by: <a href="http://mohmdhasan.tk" target="_blank">Mohmdhasan.tk</a>
      </p>
   </footer>

</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="assets/js/login.js"></script>
</html>
