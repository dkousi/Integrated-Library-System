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
input[type=number], input:required {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
input:required {
     background-color: #ddd;
    outline: none;
}
input[type=number]:focus {
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
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
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
    .cancelbtn, .signupbtn {
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

<form method="post" action="signup.php" style="border:1px solid rgb(16, 211, 224)">
<?php include('errors.php');  ?>
  <div class="container">
    <h1 align="center">Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input pattern="[A-Za-z]{3,}" placeholder="Enter your name Eg:john S" name="username" value="<?php echo $username; ?>" required>

    <label for="register_number"><b>RegisterNumber</b></label>
    <input type="number" placeholder="Enter Register Number" name="registernumber" value="<?php echo $registernumber; ?>">

    <label for="password"><b>Password</b></label>
    <input type="number" placeholder="Repeat your Register Number" name="password">
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:rgb(216, 219, 43)">Terms & Privacy</a>.</p>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="signup" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
