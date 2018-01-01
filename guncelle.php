<?php
if(isset($_GET['did'])){
	
	$mysqli = new mysqli("localhost","root","","test");
    $sql = mysqli_query($mysqli,"UPDATE click SET veri='{$_GET['veri']}' WHERE did={$_GET['did']} AND satir='{$_GET['i']}' AND sutun={$_GET['j']}");
    if(mysqli_affected_rows($mysqli)>0){
	echo "Kayıt başarıyla eklendi"; echo "<br>";
	}else
	echo 'eklenmedi!';
	echo mysqli_error($mysqli);
	mysqli_close($mysqli);
}else
	echo 'sid not given!';
?>