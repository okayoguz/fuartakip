<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$ad = $_SESSION['kullanicikaydi']['ad'];
$soyad = $_SESSION['kullanicikaydi']['soyad'];
$eposta = $_SESSION['kullanicikaydi']['eposta'];
$ilgi = $_SESSION['kullanicikaydi']['ilgi'];

$mysqli = new mysqli("localhost","root","","fuar");
	 mysqli_select_db($mysqli,"fuar");
	 mysqli_query($mysqli,"SET NAMES UTF8");
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid FROM fuaryeri,fuarlar WHERE fuarlar.alan='$ilgi' and fuarlar.fid=fuaryeri.fid and fuarlar.ad NOT IN (SELECT fuarlar.ad FROM fuaryeri,fuarlar,gidenler WHERE gidenler.eposta='$eposta' and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid);");
	
	if($eposta==null){
		include("menu.php");
		echo "<div style='width:80%;margin:auto' class='table-responsive'><h2>Lütfen Giriş Yapınız!</h2><br><a style='background-color:green;text-decoration:none;color:white;font-size:23px' href='fuargiris.php'><b>Giriş</b></a></div>";
		
	}
	else{
	include("menu2.php");
			echo "<div style='width:80%;margin:auto;text-align:center' class='table-responsive'><table class='table'>
		<thead> <th style='width:250px;height:30px;'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
	echo "<h3 style='text-align:center;'>İlgi Alanınıza Göre Fuarlar<h3><hr>";
	
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr style='height:30px'><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td>
	<td><form action=kontrol.php>
		<input type=submit value=Kayıt></input>
		<input type=hidden name=islem value=fuarkayıt></input>
		<input type=hidden name=eposta1 value=$eposta></input>
		<input type=hidden name=fuarid value={$fuar['fuarid']}></input>
		</form></td></tr>";
			$rowSet2 = mysqli_query($mysqli, $sql2 = "SELECT COUNT(gidenler.fuarid) AS sayi FROM gidenler WHERE gidenler.fuarid='{$fuar['fuarid']}' GROUP BY gidenler.fuarid;");
			while($fuar2 = mysqli_fetch_assoc($rowSet2)){
					echo "<tr style='height:20px;color:white;'><td colspan='5'>{$fuar2['sayi']} Kişi Bu Fuara Gidiyor</td></tr>";
			}
	}
	}
	

	    echo "</tbody></table></div>";
	
	
		mysqli_close($mysqli);
	

?>