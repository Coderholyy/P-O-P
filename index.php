<?php
  include 'header.php';
?>  

<!DOCTYPE html>
<html>

  <body onLoad="swapImage()">

    
  

    <div class="o">
      <div class="i">

        <div class="container" style="width:90%">

    <?php 
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            if(strpos($url,'loginfailed') !== false){
                        echo "<div class='alert alert-danger alert-dismissable' style='text-align:center'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <span class='glyphicon glyphicon-remove'></span> Username or password is incorrect </div>";
             }
            elseif (strpos($url,'loginsuccess') !== false) {
                echo "<div class='alert alert-success alert-dismissable' style='text-align:center'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <span class='glyphicon glyphicon-ok-sign'></span> Login Success ... GO LIVE now</div>";
             }
            elseif (strpos($url,'logoutsuccess') !== false) {
                echo "<div class='alert alert-success alert-dismissable' style='text-align:center'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <span class='glyphicon glyphicon-ok-circle'></span> Logged out succesfully</div>";
             }
            elseif(strpos($url,'signupsuccess') !== false) {
                echo "<div class='alert alert-success alert-dismissable' style='text-align:center'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <span class='glyphicon glyphicon-ok'></span> Sign Up succesfully</div>";
            } 
            elseif(strpos($url,'error=empty') !== false) {
                 echo "<div class='alert alert-danger alert-dismissable' style='text-align:center'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <span class='glyphicon glyphicon-remove'></span> Fill out all the fields </div>";
            }
            elseif(strpos($url,'error=username') !== false) {
                echo "<div class='alert alert-danger alert-dismissable' style='text-align:center'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <span class='glyphicon glyphicon-remove'></span> Username already exists </div>";
            }
    /*        elseif(strpos($url,'error=invalid') !== false){
                echo "<div class='alert alert-danger alert-dismissable' style='text-align:center'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <span class='glyphicon glyphicon-remove-sign'></span> Invalid characters in input </div>";
            }
     */       
            elseif(strpos($url,'error=email') !== false){
                echo "<div class='alert alert-danger alert-dismissable' style='text-align:center'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                      <span class='glyphicon glyphicon-remove-sign'></span> Email doesnt exist </div>";
            }
    ?>     
  </div>

      <img name="slide" height=300px width=40% src="cric1.jpg" class="imgslider">
        
       </div>
    </div>
     
     <div class="o">
      <div class="i">

       <a href="topic.php">
   <!--       <div class="ii">  -->
            <button type="button" class="btn btn-primary btn-success" ><span class='glyphicon glyphicon-globe'></span> LIVE !!</button>
            <p><h1> TOPIC NAME:</h1>TEST1 form</p><br>
            <h2>Description:</h2>
            <p>Click the above question and then comment on it!!</p>
    <!--      </div>  -->
        
        </a>
      </div>
    </div>

    <div class="o">
    <div class="i">

       <a href="#">
   <!--       <div class="ii">  -->
            <button type="button" class="btn btn-primary btn-danger disabled" ><span class='glyphicon glyphicon-ban-circle'></span> CLOSED !!</button>
            <p><h1> TOPIC NAME:</h1>TEST2 form</p><br>
            <h2>Description:</h2>
            <p>Click the above question and then comment on it!!</p>
    <!--      </div>  -->
        
        </a>
      </div>
    </div>

    <script>
      var i=0;
      var path=new Array();
      path[0]="pic1.jpg";
      path[1]="pic2.jpg";
      path[2]="pic3.jpg";
      function swapImage()
      {
      document.slide.src=path[i]
      if(i<path.length-1) i++; else i=0;
      setTimeout("swapImage()",3000);
      }
    </script>


    
  </body>




</html>
