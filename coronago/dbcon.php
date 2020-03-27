<?php



$server= 'localhost';
$user= 'root';
$password= '';
$db= 'coronalist';

$con= mysqli_connect($server, $user, $password, $db);
if ($con) {
	?>
	<script>
		alert("connection succeful")
	</script>
	<?php
}else{
	?>
	<script>
		alert("connection succeful")
	</script>
	<?php
}



?>