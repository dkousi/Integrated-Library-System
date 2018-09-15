<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<style>
body {
    background-image: url('kklib7.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
    font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
form{
    margin: 0 auto;
    width: 30%;
    border-radius: 15px;
    border: 0px solid rgb(35, 228, 228);
    background-color : rgba(148, 152, 155, 0.479);
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.loginbtn {
    padding: 14px 20px;
    background-color: #b234e4;
}

/* Float cancel and signup buttons and add an equal width */
.loginbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .loginbtn, .signupbtn {
       width: 100%;
    }
}
.error {
    width:92%;
    margin:0 auto;
    padding:10px;
    border:1px solid  #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align:left;
}
</style>
<body>

<form method="post" action="login.php" style="border:1px solid rgb(16, 211, 224)">
<?php include('errors.php');  ?>
  <div class="container">
      <h1 align="center"><strong>Welcome to Sona ILS</strong></h1>
      <h5 align="center"><q>When you are in doubt,go to library!</q></h5>
    <h1 align="center">Log In</h1>
    <p>Please fill in this form to log in to your account.</p>
    <hr>

    <label for="register_number"><b>RegisterNumber</b></label>
    <input type="text" placeholder="Enter Register Number" name="registernumber" value="<?php echo $registernumber; ?>">

    <label for="password"><b>Password</b></label>
    <input type="text" placeholder="Enter Register Number" name="password" value="<?php echo $password; ?>">

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:rgb(216, 219, 43)">Terms & Privacy</a>.</p>
    <div class="clearfix">
      <button type="submit" name="login" class="loginbtn">login</button>
      <button type="button" class="signupbtn" onclick="window.location.href='signup.php'">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
