<?php
session_start();
?>
<?php

error_reporting(E_ALL^E_NOTICE);
switch($_GET['islem']){
	
	case 'login': 
		login($_GET['username'],$_GET['password']);
		break;
	
	case 'kayit':
		kayit($_GET[sifre],$_GET[sifre1],$_GET[kullaniciadi],$_GET[yas],$_GET[isim],$_GET[soyisim],$_GET[cinsiyet],$_GET[ilgialanı]);
		 break;
		 
	case 'ilgisec':
	ilgilistele($_GET[ilgialanı]);
		 break;
		  
	case 'sehirsec':
	sehirlistele($_GET[sehir]);
		 break;
		 
	case 'tarihsec':
	tarihlistele($_GET[tarih]);
	break;
	
	case 'hepsi':
	hepsi();
	break;
	
	case 'kayıtsil':
	sil($_GET[eposta1],$_GET[fuarid]);
	break;
	
	case 'fuarkayıt':
	fuarkayıt($_GET[eposta1],$_GET[fuarid]);
	break;
	
	case 'cikis':
	cikis();
	break;
	
	case 'guncelle':
	guncelle($_GET[sifre],$_GET[sifre1],$_GET[yas],$_GET[isim],$_GET[soyisim],$_GET[cinsiyet],$_GET[ilgialanı]);
		 break;
	
	
	
		 
		 default:
		 
}

function cikis(){
	
	session_destroy();
	header("Location:fuarindex.php");
}

function fuarkayıt($eposta,$fuarid){
	$mysqli = new mysqli("localhost","root","","fuar");
	 mysqli_select_db($mysqli,"fuar");
	 mysqli_query($mysqli,"SET NAMES UTF8");
	$rowSet1 = mysqli_query($mysqli, $sql1 = "INSERT INTO gidenler VALUES('$eposta' ,'$fuarid') ;");

	mysqli_close($mysqli);
}

function sil($eposta,$fuarid){
	$mysqli = new mysqli("localhost","root","","fuar");
	 mysqli_select_db($mysqli,"fuar");
	 mysqli_query($mysqli,"SET NAMES UTF8");
	$rowSet1 = mysqli_query($mysqli, $sql1 = "DELETE FROM gidenler WHERE gidenler.eposta='$eposta' and gidenler.fuarid='$fuarid' ;");
	header('Location: gittiklerim.php');

	mysqli_close($mysqli);
}


function hepsi(){
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$ad = $_SESSION['kullanicikaydi']['ad'];
	$soyad = $_SESSION['kullanicikaydi']['soyad'];
	$eposta = $_SESSION['kullanicikaydi']['eposta'];
	$mysqli = new mysqli("localhost","root","","fuar");
	 mysqli_select_db($mysqli,"fuar");
	 mysqli_query($mysqli,"SET NAMES UTF8");
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid FROM fuaryeri,fuarlar WHERE fuarlar.fid=fuaryeri.fid ORDER BY fuarlar.ftime;");
	
	if($eposta==null){
		include("menu.php");
		
				echo "<div style='width:80%;margin:auto' class='table-responsive'><table class='table'>
		<thead> <th style='width:250px;height:30px;'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr style='height:30px'><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td></tr>";
	}
		
	}
	else{
	include("menu2.php");
	
		echo "<div style='width:80%;margin:auto' class='table-responsive'><table class='table'>
		<thead> <th style='width:250px;height:30px;'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr style='height:30px'><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td><td><form action=?>
		<input type=submit value=Kayıt></input>
		<input type=hidden name=islem value=fuarkayıt></input>
		<input type=hidden name=eposta1 value=$eposta></input>
		<input type=hidden name=fuarid value={$fuar['fuarid']}></input>
		
		</form></td></tr>";
	}
	
	}
	
	

	    echo "</tbody></table></div>";

	mysqli_close($mysqli);
}

function tarihlistele($tarih){
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$ad = $_SESSION['kullanicikaydi']['ad'];
	$soyad = $_SESSION['kullanicikaydi']['soyad'];
	$eposta = $_SESSION['kullanicikaydi']['eposta'];
	$mysqli = new mysqli("localhost","root","","fuar");
	 mysqli_select_db($mysqli,"fuar");
	 mysqli_query($mysqli,"SET NAMES UTF8");
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid FROM fuaryeri,fuarlar WHERE fuarlar.fid=fuaryeri.fid and fuarlar.ftime='$tarih';");
	if($eposta==null){
		include("menu.php");
				echo "<div style='width:80%;margin:auto' class='table-responsive'><table class='table'>
		<thead> <th style='width:250px;height:30px;'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr style='height:30px'><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td></tr>";
	}
	}
	else{
	include("menu2.php");
		echo "<div style='width:80%;margin:auto;text-align:center' class='table-responsive'><table class='table'>
		<thead> <th style='width:250px;height:30px;'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr style='height:30px'><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td><td><form action=?>
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
}

function sehirlistele($sehir){
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$ad = $_SESSION['kullanicikaydi']['ad'];
	$soyad = $_SESSION['kullanicikaydi']['soyad'];
	$eposta = $_SESSION['kullanicikaydi']['eposta'];
	$mysqli = new mysqli("localhost","root","","fuar");
	 mysqli_select_db($mysqli,"fuar");
	 mysqli_query($mysqli,"SET NAMES UTF8");
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid FROM fuaryeri,fuarlar WHERE fuarlar.fid=fuaryeri.fid and fuaryeri.il='$sehir';");
	if($eposta==null){
		include("menu.php");
				echo "<div style='width:80%;margin:auto' class='table-responsive'><table class='table'>
		<thead> <th style='width:250px;height:30px;'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr style='height:30px'><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td></tr>";
	}
	}
	else{
	include("menu2.php");
		echo "<div style='width:80%;margin:auto;text-align:center' class='table-responsive'><table class='table'>
		<thead> <th style='width:250px;height:30px;'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr style='height:30px'><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td><td><form action=?>
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
}

function ilgilistele($ilgi){
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$ad = $_SESSION['kullanicikaydi']['ad'];
	$soyad = $_SESSION['kullanicikaydi']['soyad'];
	$eposta = $_SESSION['kullanicikaydi']['eposta'];
	$mysqli = new mysqli("localhost","root","","fuar");
	 mysqli_select_db($mysqli,"fuar");
	 mysqli_query($mysqli,"SET NAMES UTF8");
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT fuarlar.ad,fuarlar.ftime,fuaryeri.fad,fuaryeri.il,fuarlar.fuarid FROM fuarlar,fuaryeri WHERE alan='$ilgi' and fuarlar.fid=fuaryeri.fid;");
	
	if($eposta==null){
		include("menu.php");
				echo "<div style='width:80%;margin:auto' class='table-responsive'><table class='table'>
		<thead> <th style='width:250px;height:30px;'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr style='height:30px'><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td></tr>";
	}
	}
	else{
	include("menu2.php");
		echo "<div style='width:80%;margin:auto;text-align:center' class='table-responsive'><table class='table'>
		<thead> <th style='width:250px;height:30px;'>Fuar Adı</th><th style='width:300px;'>Fuar Yeri</th><th>Şehir</th><th>Tarih</th><th>İşlem</th></thead>
		<tbody>";
	while($fuar = mysqli_fetch_assoc($rowSet1)){
	echo "<tr style='height:30px'><td>{$fuar['ad']}</td> <td>{$fuar['fad']}</td> <td>{$fuar['il']}</td> <td>{$fuar['ftime']}</td><td><form action=?>
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
}

function login($username,$password){
	
	$mysqli = new mysqli("localhost","root","","fuar");
	mysqli_select_db($mysqli,"fuar");
	mysqli_query($mysqli,"SET NAMES UTF8");
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT * FROM user WHERE eposta='$username' AND sifre=$password LIMIT 1;"); //echo "SQL: $sql<br>";
	if(mysqli_num_rows($rowSet1)>0){
		echo "Basarili!";
			$_SESSION['kullanicikaydi']=mysqli_fetch_assoc($rowSet1);
				header("Location:/fuarindex.php");
				
	}
	else{
	?>
	<html>
<body background="arkap.jpg">
<div style="height:150px"></div>
<div><h1 style="text-align:center;font-family:arial;font-size:40px">Giriş</h1></div>
	<div style="text-align:center"><form action="/kontrol.php">
		<input type=text name=username value="KullaniciAdi" style="width:400px;height:30px"></input>
		<br>
		<br>
		<input type=password name=password value="Sifre" style="width:400px;height:30px"></input>
		<br>
		<br>
		<input type=submit value=Giriş></input>
		<input type=hidden name=islem value=login></input>
		<input type=button value=ŞifremiUnuttum></input>
		</form>
	<h4>Hesabınız yok mu?</h4>
	<a style="text-decoration:none" href='fuarkayitol.php'><b>Kayıt olun</b></a>
	<h2 style='text-align:center;color:red'>Başarısız Giriş<h2>
	</div>	
</html>
</body>
	<?php
			
	}
	
}

function kayit($s1,$s2,$k1,$y,$is,$so,$c,$ilgi){
	if($s1!=$s2){
		echo "Lütfen Aynı Şifreler Girin..";
	}
	else{
		if($y<=80 and $y>=15){
			if($is==null or $so==null){
				echo "İsim veya Soyisim Boş Olamaz..";
				
			}
			else{
				if(!$c){
					echo "Cinsiyet Seçiniz..";
					
				}
				else{
					$mysqli = new mysqli("localhost","root","","fuar");
					 $sql = mysqli_query($mysqli,"INSERT INTO user(eposta,ad,soyad,yas,cins,sifre,ilgi) VALUES ('$k1','$is','$so','$y','$c','$s1','$ilgi');");
					 mysqli_close($mysqli);
					 				header("Location:/fuarindex.php");
				}
			}
			
		}
		else{
			echo "Lütfen Geçerli Bir Yaş Giriniz..";
		}
	}
}

function guncelle($s1,$s2,$y,$is,$so,$c,$ilgi){
	if($s1!=$s2){
		echo "Lütfen Aynı Şifreler Girin..";
	}
	else{
		if($y<=80 and $y>=15){
			if($is==null or $so==null){
				echo "İsim veya Soyisim Boş Olamaz..";
				
			}
			else{
				if(!$c){
					echo "Cinsiyet Seçiniz..";
					
				}
				else{
					$mysqli = new mysqli("localhost","root","","fuar");
					error_reporting(E_ALL ^ E_NOTICE);
					session_start();
					$eposta = $_SESSION['kullanicikaydi']['eposta'];
					 $sql = mysqli_query($mysqli,"UPDATE user SET ad='$is',soyad='$so',yas='$y',cins='$c',sifre='$s1',ilgi='$ilgi' WHERE eposta='$eposta';");
					 mysqli_close($mysqli);
					 				header("Location:/fuarindex.php");
				}
			}
			
		}
		else{
			echo "Lütfen Geçerli Bir Yaş Giriniz..";
		}
	}
}

?>