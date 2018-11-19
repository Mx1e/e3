<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dilek";

$conn = new mysqli($host, $user,$pass,$dbname);

if (isset($_POST['submit'])) {
	
$dilek = $_POST['dilek'];


	$sql = "INSERT INTO dile(dileklerim) VALUES ('$dilek')";

	if ($conn->query($sql)) {
			echo "<li> Dileğiniz İletilmiştir... </li>";

			}

}






?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doğum Gunun Kutlu Olsun</title>
	<link rel="shourtcut icon" href="logo.png">
	<link rel="stylesheet" type="text/css" href="2.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="shourtcut icon" href="logo.png">
	<script type="text/javascript"></script>

</head>
<body style="background-color:black;">



	<form accept="<?php  echo $_SERVER['PHP_SELF']?>" method = "post">
		<div class="yazı">
		<p>“Bir Dilek Tut Ve Onu Buraya Yaz .”</p>
		<textarea name="dilek" required="Dilek Dilemeyecekmisin ?" placeholder="Buraya Yaza Bilirsin..."></textarea>
		<br>
		<input type="submit" name="submit" value="Dileğini Yıldızlara Gönder">
		
		</div>
		<a href="3.php"><i class="fas fa-arrow-alt-circle-right"></i></a>


		
	</form>
<embed width="100" height="50" src="muzik.mp3" hidden=true>
</body>
</html>