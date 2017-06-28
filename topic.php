<?php
  include 'header.php';
?>  

<!DOCTYPE html>
<html>


  <body>
   
    <div class="o">
      <div class="i">
      		<button type="button" class="btn btn-primary btn-success" ><span class='glyphicon glyphicon-globe'></span> LIVE !!</button>
       		<p><h1> TOPIC NAME:</h1>TEST1 form</p><br>
            <h2>Description:</h2>
            <p>Read the above question and then comment on it!!</p>
            <br>
       </div>
    </div>  

     
       <?php
			if(isset($_SESSION['id'])){
				echo "<div class='o'><div class='i'><form method='POST' action='".setComments($conn)."'>
						<input type='hidden' name='uid' value='".$_SESSION['id']."'></input>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'></input>
						<textarea name='message' placeholder='Type your comment here..'></textarea><br>
						<button name='commentsubmit' type='submit' class='btn btn-primary'><span class='glyphicon glyphicon-comment'></span>  COMMENT</button>
					</form>	</div></div>";
			} else {
				echo "<div class='o'><div class='i'>You are need to be logged in to comment !!</div></div>";
			}	

			getcomments($conn);
			
			
?>
	
      

  </body>   




</html>