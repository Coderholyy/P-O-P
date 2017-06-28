<?php
  include 'header.php';
?>  


<!DOCTYPE html>
<html>
	<body>
		<?php
		$puid = $_POST['puid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];

		
		echo "<form method='POST' action='".replyComments($conn)."'>
				<input type='hidden' name='puid' value='".$_POST['puid']."'>
				<input type='hidden' name='uid' value='".$_POST['uid']."'>
				<input type='hidden' name='date' value='".$_POST['date']."'>
				<textarea name='message' placeholder='Type your reply here'></textarea><br>
				<button name='commentsubmit' type='submit' onClick=\"javascript: return confirm('Confirm to Submit comment') ;\">Reply</button>
			</form>";
		?>
	</body>


</html>