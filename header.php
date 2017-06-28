<?php
  date_default_timezone_set('asia/kolkata');
  include 'database.php';
  include 'comments.inc.php';
  session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>P-'O'-P</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styl.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>	

	<body>

	
  <div class="container">

    <div class="header1">
      <img src="logo.jpg" />
      <h1 id="h">P<em>ublic</em>-'O'<em>-pinion</em></h1>
    </div>
    
<!--try navbar-inverse -->    
    <nav class="navbar navbar-inverse ">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="topic.php">P-O-P</a>
        </div>
        <ul class="nav navbar-nav" >
          <li id="home"><a href="index.php" ><span class='glyphicon glyphicon-home'></span> Home</a></li>
          <li id="about"><a href="about.php"><span class='glyphicon glyphicon-stats'></span> About</a></li>
          <li id="stats"><a href="contact.php"><span class='glyphicon glyphicon-earphone'></span> Contact us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if(!isset($_SESSION['id'])){
              echo "<li><a href='#' id='sign'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
              <li> <a href='#' id='open'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
            }
          else {
            echo "<li class='active'><a href='#'>Welcome '".$_SESSION['uid']."'</a></li>
                <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
            }    
          ?>    
      </div>
    </nav>

    
  </div>



	
		<!-- LOGIIN form -->  
     <div class="container">
       <div class="overlay">  
        <div class="overlay-content">
          <br>
          <h2 class="Loginform">LOGIN form</h2><br>
          <p class="closebtn" style="font-size:30px;cursor:pointer"> &times;</p>
           <?php
           echo "<form method='POST' action='".getLogin($conn)."'>
              <div class='form-group'>
                <span class='form-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                <label for='uid'>Username:</label>
                <input type='text' class='form-control' name='uid' placeholder='Type your Username'>
              </div><br>
              <div class='form-group'>
                <span class='form-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
                <label for='pwd'>Password:</label>
                <input type='password' class='form-control' name='pwd' placeholder='Type your password'>
              </div><br>
              <div class='checkbox'>
                <label><input type='checkbox'> Remember me</label>
              </div><br>
              <button type='submit' class='btn btn-primary btn-success' name='loginsubmit'><span class='glyphicon glyphicon-log-in'></span> LOG IN</button>
            </form><br>";
            ?>
          <a href="">Forgot Password?</a>
          </div>
        </div>
      </div>
  
      
       <div class="container">
      <div class="overlay1">
        <div class="overlay-content1">
          <h2 class="Loginform">SIGNUP form</h2><br>
            <p class="closebtn1" style="font-size:30px;cursor:pointer"> &times;</p>
           <?php
           echo "<form method='POST' action='".signup($conn)."'>
              
              <div class='form-group'>
                <span class='form-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                <label for='uid'>Username:</label>
                <input type='text' class='form-control' name='uid' placeholder='Type your Username'>
              </div><br>
              <div class='form-group'>
                <span class='form-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
                <label for='email'>E-mail:</label>
                <input type='text' class='form-control' name='email'  placeholder='Type your emailid@xmail.com'>
              </div><br>
              <div class='form-group'>
                <span class='form-group-addon'><i class='glyphicon glyphicon-lock'></i></span>
                <label for='pwd'>Password:</label>
                <input type='password' class='form-control' name='pwd'  placeholder='Type your password'>
              </div><br>
              <div class='checkbox'>
                <label><input type='checkbox'> Remember me</label>
              </div><br>
              <button type='submit' class='btn btn-primary btn-success' name='signupsubmit'><span class='glyphicon glyphicon-user'></span> SIGN UP</button>
            </form><br>";
            ?>
          </div>
      </div>
    </div>
  </div>


<script>
        $(document).ready(function(){
            $("#open").click(function(){
                $(".overlay").show(600);
            });
            $("#sign").click(function(){
                $(".overlay1").show(600);
            });
            $(".closebtn").click(function(){
                $(".overlay").hide();
            });
             $(".closebtn1").click(function(){
                $(".overlay1").hide();
            }); 
        });

        
</script>

	</body>
</html>