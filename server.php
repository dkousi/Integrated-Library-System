<?php
session_start();
$username="";
$registernumber="";
$password="";
$bookid="";
$title="";
$author="";
$edition="";
$errors=array();
$db=mysqli_connect('localhost','root','','signingup');
if(isset($_POST['signup'])){
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $registernumber=mysqli_real_escape_string($db,$_POST['registernumber']);
    $password=mysqli_real_escape_string($db,$_POST['password']);

if(empty($username)){
array_push($errors,"Username is required");
}
if(empty($registernumber)){
    array_push($errors,"Register number is required");
}
if(empty($password)){
        array_push($errors,"Password is required");
}
if($registernumber!=$password){
    array_push($errors,"Register number and Password do not match");
}
if(count($errors)==0){
    $sql="INSERT INTO student(username,registernumber) 
            VALUES('$username','$registernumber')";
            mysqli_query($db,$sql); 
            $_SESSION['username']=$username;
            $_SESSION['success']="You are now logged in";
            header('location:index.php');
}
}
if(isset($_POST['login'])){
    $registernumber=mysqli_real_escape_string($db,$_POST['registernumber']);
    $password=mysqli_real_escape_string($db,$_POST['password']);

if(empty($registernumber)){
    array_push($errors,"Register number is required");
}
if(empty($password)){
        array_push($errors,"Password is required");
}
if($registernumber!=$password){
    array_push($errors,"Register number and Password do not match");
}

print_r($errors); 
if(count($errors)==0){
   echo "hello";
   array_push($errors,"count Errors ===   zero ");
    $query="SELECT * FROM student WHERE registernumber='$registernumber'";
    $result=mysqli_query($db,$query);
    $records=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==1){
        $_SESSION['username']=$records['username'];
        $_SESSION['success']="You are now logged in";
        array_push($errors,"correct register number/password is entered");
        header('location:index.php');
       
    }else{
       
        header('location:login.php');
        array_push($errors,"Wrong register number/password is entered");
    }
}
}
if (isset($_POST['addup'])) {
    $bookid= mysqli_real_escape_string($db, $_POST['bookid']);
    $title= mysqli_real_escape_string($db, $_POST['title']);
    $author= mysqli_real_escape_string($db, $_POST['author']);
    $edition= mysqli_real_escape_string($db, $_POST['edition']);
    if (empty($bookid)) {
        array_push($errors, "Book Id is required");
    }
    if (empty($title)) {
        array_push($errors, "Title is required");
    }
    if (empty($author)) {
        array_push($errors, "Author is required");
    }
    if (empty($edition)) {
        array_push($errors, "Edition is required");
    }
    if (count($errors) == 0) {
        $sql = "INSERT INTO library(bookid,title,author,edition) 
            VALUES('$bookid','$title','$author','$edition')";
        mysqli_query($db, $sql);
        $_SESSION['title'] = $title;
        $_SESSION['add']="is added successfully!";
        header('location:add.php');
    }
}
if (isset($_POST['delete'])) {
    $bookid = mysqli_real_escape_string($db, $_POST['bookid']);
    if (empty($bookid)) {
        array_push($errors, "Book Id is required");
    }
    $query = "SELECT * FROM library WHERE bookid='$bookid'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 0) {
        array_push($errors, "Wrong register number/password is entered");
        header('location:del.php');
    }
    if (count($errors) == 0) {
        $sql = "DELETE FROM library
WHERE bookid='$bookid'";
        mysqli_query($db, $sql);
        header('location:del.php');
    }
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
?>