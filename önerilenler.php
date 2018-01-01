<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$ad = $_SESSION['kullanicikaydi']['ad'];
$soyad = $_SESSION['kullanicikaydi']['soyad'];
$eposta = $_SESSION['kullanicikaydi']['eposta'];
$yas = $_SESSION['kullanicikaydi']['yas'];
$cinsiyet = $_SESSION['kullanicikaydi']['cins'];

$mysqli = new mysqli("localhost","root","","fuar");
	 mysqli_select_db($mysqli,"fuar");
	 mysqli_query($mysqli,"SET NAMES UTF8");
	 
	 	 if($yas<=20){
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas<=20 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid and fuarlar.ad NOT IN (SELECT fuarlar.ad FROM fuaryeri,fuarlar,gidenler WHERE gidenler.eposta='$eposta' and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid) ORDER BY RAND() LIMIT 3 ;");
		$rowSet2 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid,COUNT(fuarlar.fuarid) from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas<=20 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid GROUP BY fuarlar.fuarid ORDER BY COUNT(fuarlar.fuarid) DESC LIMIT 1 ;");
	
	 }
	 if($yas>20 && $yas<=30){
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas>20 and user.yas<=30 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid and fuarlar.ad NOT IN (SELECT fuarlar.ad FROM fuaryeri,fuarlar,gidenler WHERE gidenler.eposta='$eposta' and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid) ORDER BY RAND() LIMIT 3 ;");
			$rowSet2 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid,COUNT(fuarlar.fuarid) from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas>20 and user.yas<=30 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid GROUP BY fuarlar.fuarid ORDER BY COUNT(fuarlar.fuarid) DESC LIMIT 1 ;");
	 }
	 	 if($yas>30 && $yas<=40){
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas>30 and user.yas<=40 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid and fuarlar.ad NOT IN (SELECT fuarlar.ad FROM fuaryeri,fuarlar,gidenler WHERE gidenler.eposta='$eposta' and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid) ORDER BY RAND() LIMIT 3;");
	$rowSet2 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid,COUNT(fuarlar.fuarid) from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas>30 and user.yas<=40 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid GROUP BY fuarlar.fuarid ORDER BY COUNT(fuarlar.fuarid) DESC LIMIT 1 ;");
	 }
	 	 if($yas>40 && $yas<=50){
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas>40 and user.yas<=50 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid and fuarlar.ad NOT IN (SELECT fuarlar.ad FROM fuaryeri,fuarlar,gidenler WHERE gidenler.eposta='$eposta' and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid) ORDER BY RAND() LIMIT 3 ;");
	$rowSet2 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid,COUNT(fuarlar.fuarid) from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas>40 and user.yas<=50 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid GROUP BY fuarlar.fuarid ORDER BY COUNT(fuarlar.fuarid) DESC LIMIT 1 ;");
	 }
	 	 if($yas>50){
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas>50 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid and fuarlar.ad NOT IN (SELECT fuarlar.ad FROM fuaryeri,fuarlar,gidenler WHERE gidenler.eposta='$eposta' and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid) ORDER BY RAND() LIMIT 3 ;");
	$rowSet2 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid,COUNT(fuarlar.fuarid) from user,gidenler,fuarlar,fuaryeri WHERE user.cins='$cinsiyet' and user.yas>50 and gidenler.eposta=user.eposta and gidenler.fuarid=fuarlar.fuarid and fuarlar.fid=fuaryeri.fid GROUP BY fuarlar.fuarid ORDER BY COUNT(fuarlar.fuarid) DESC LIMIT 1 ;");
	 }
	 
	if($eposta==null){
		include("menu.php");
		echo "<div style='width:80%;margin:auto' class='table-responsive'><h2>Lütfen Giriş Yapınız!</h2><br><a style='background-color:green;text-decoration:none;color:white;font-size:23px' href='fuargiris.php'><b>Giriş</b></a></div>";
		
	}
	else{
	include("menu2.php");
	
					echo "<div style='width:80%;margin:auto;opacity:0.9;text-align:center' class='table-responsive'><table class='table'><thead><th colspan='5' >En Çok Tercih Edilen Fuar:</th></thead>
		<thead> <th style='width:250px'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
				
	while($fuar2 = mysqli_fetch_assoc($rowSet2)){
	echo "<tr><td>{$fuar2['ad']}</td> <td>{$fuar2['fad']}</td> <td>{$fuar2['il']}</td> <td>{$fuar2['ftime']}</td>
	<td><form action=kontrol.php>
		<input type=submit value=Kayıt></input>
		<input type=hidden name=islem value=fuarkayıt></input>
		<input type=hidden name=eposta1 value=$eposta></input>
		<input type=hidden name=fuarid value={$fuar2['fuarid']}></input>
		</form></td></tr>";
					$rowSet3 = mysqli_query($mysqli, $sql3 = "SELECT COUNT(gidenler.fuarid) AS sayi FROM gidenler WHERE gidenler.fuarid='{$fuar2['fuarid']}' GROUP BY gidenler.fuarid;");
			while($fuar3 = mysqli_fetch_assoc($rowSet3)){
					echo "<tr style='height:30px;color:white;'><td colspan='5' >{$fuar3['sayi']} Kişi Bu Fuara Gidiyor</td></tr>";
			
			
			}
		echo "</div>";
	}
	

	    echo "</tbody></table>";
		
		echo "<hr>";
		
			echo "<div style='margin:auto' class='table-responsive'><table class='table'><thead><th colspan='5'>Diğer Önerilen Fuarlar:</th></thead>
		<thead> <th style='width:250px'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
				
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td>
	<td><form action=kontrol.php>
		<input type=submit value=Kayıt></input>
		<input type=hidden name=islem value=fuarkayıt></input>
		<input type=hidden name=eposta1 value=$eposta></input>
		<input type=hidden name=fuarid value={$fuar['fuarid']}></input>
		</form></td></tr>";
					$rowSet4 = mysqli_query($mysqli, $sql4 = "SELECT COUNT(gidenler.fuarid) AS sayi FROM gidenler WHERE gidenler.fuarid='{$fuar['fuarid']}' GROUP BY gidenler.fuarid;");
			while($fuar4 = mysqli_fetch_assoc($rowSet4)){
					echo "<tr style='height:30px;color:white;'><td colspan='5'>{$fuar4['sayi']} Kişi Bu Fuara Gidiyor</td></tr>";
			
			
			}
		echo "</div>";
	}
	}
	

	    echo "</tbody></table>";

	mysqli_close($mysqli);
	

?>