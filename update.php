<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>ILS
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./bootstrap.min.css">
  <link rel="stylesheet" href="w3.css">
  <script src="./jquery.min.js"></script>
  <script src="./bootstrap.min.js"></script>
  <style>
  nav {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}
 .button {
    background-color: black;
    color:  rgb(169,169,169);
    padding: 14px;
    border: none;
    font-size: 16px;
    text-align:center;
}
.button:hover{ color: white;}
  .chip {
    display: inline-block;
    padding: 0 25px;
    height: 30px;
    font-size: 16px;
    line-height: 30px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 30px;
    width: 30px;
    border-radius: 50%;
}
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
.warning {
    margin: 2px 310px;
    cursor: pointer;
  border-color: #ff9800;
  color: orange;
}

.warning:hover {
  background: #ff9800;
  color: white;
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    form{
    margin: 12px;
    width: 80%;
    border-radius: 15px;
    border: 0px solid rgb(35, 228, 228);
    background-color : rgba(148, 152, 155, 0.479);
}
input[type=text] {
    width: 85%;
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
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 1px;
    text-align: left;
    border-bottom: 1px solid #ddd;
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


p{
    text-align:center;
}
    /* Set black background color, white text and some padding */
    .footer {
      background-color: #555;
      color: white;
      padding: 15px;
      width: 100%;
      text-align: center;
      position: fixed;
      left: 0;
      bottom: 0;
      right: 0;
      height: 50px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
    <div class="header">
   <h3>Welcome to SONA ILS</h3>
  <h5><q>When You Are In Doubt , Go To Library!</q></h5>
</div>
<nav class="navbar navbar-inverse" style="background-color:black">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="ils.php">ILS</a>
    </div>
   
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="add.php">ADD BOOKS </a></li>
        <li><a href="del.php">DELETE BOOKS </a></li>
       <li><button onclick="document.getElementById('id01').style.display='block'" class="button">SEARCH BOOKS</button>
<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
   <h2>SEARCH BOOKS BY</h2>
  </header>

  <div class="w3-bar w3-border-bottom">
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'London')">Book Id</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Paris')">Title</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Tokyo')">Author</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'singapore')">Edition</button>
  </div>

  <div id="London" class="w3-container city">
   <form method="post" action="search.php" style="border:1px solid rgb(16, 211, 224)">
    <?php include('errors.php'); ?>
    <table><br>
    <tr>
     <td><label><b>BOOKID</b></label></td>
     <td><input type="text" placeholder="Enter Book Id" name="bookid" required></td>
    </tr>
</table>
 <button class="btn warning" name="search1" type="submit">SEARCH</button> 
</form> 
   </div>

  <div id="Paris" class="w3-container city">
    <form method="post" action="search.php" style="border:1px solid rgb(16, 211, 224)">
    <?php include('errors.php'); ?>
    <table><br>
    <tr>
     <td><label><b>BTitles</b></label></td>
     <td><input type="text" placeholder="Enter Book Title" name="title" required></td>
    </tr>
</table>
 <button class="btn warning" name="search2" type="submit">SEARCH</button> 
</form> 
  </div>

  <div id="Tokyo" class="w3-container city">
    <form method="post" action="search.php" style="border:1px solid rgb(16, 211, 224)">
    <?php include('errors.php'); ?>
    <table><br>
    <tr>
     <td><label><b>Authors</b></label></td>
     <td><input type="text" placeholder="Enter Book Author" name="author" required></td>
    </tr>
</table>
 <button class="btn warning" name="search3" type="submit">SEARCH</button> 
</form> 
  </div>

  <div id="singapore" class="w3-container city">
    <form method="post" action="search.php" style="border:1px solid rgb(16, 211, 224)">
    <?php include('errors.php'); ?>
    <table><br>
    <tr>
     <td><label><b>Edition</b></label></td>
     <td><input type="text" placeholder="Enter Book Edition" name="edition" required></td>
    </tr>
</table>
 <button class="btn warning" name="search4" type="submit">SEARCH</button> 
</form> 
  </div>
 </div>
</div> </li>
        <li class="active"><a href="update.php">UPDATE BOOKS</a></li>
        <li><a href="index.php?logout='1'">LOGOUT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<div>
<?php if (isset($_SESSION['success'])) : ?>
                 <div class="error success">
                       <h3>
                           <?php 
                            unset($_SESSION['success']);

                            ?>
                       </h3>
                 </div>
            <?php endif ?>
            <?php if (isset($_SESSION['username'])) : ?>
            <div class="chip">
            <img src="kk.jpg" alt="Person" width="96" height="96">
              <?php echo $_SESSION['username']; ?>
             </div>
            <?php endif ?>
        </div>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="split left">
    <div class="col-sm-8 text-left"> 
    <form method="post" action="update1.php" style="border:1px solid rgb(16, 211, 224)">
    <?php include('errors.php'); ?>
    <table><br>
    <tr>
     <td><label><b>BOOKID</b></label></td>
     <td><input type="text" placeholder="Enter Book Id" name="bookid" required></td>
    </tr>
</table>
 <button class="btn warning" name="search" type="submit">SEARCH</button> 
</form>  
    </div>
   </div>
   </div>
<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>
 
<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>
