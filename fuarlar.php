<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$ad = $_SESSION['kullanicikaydi']['ad'];
$soyad = $_SESSION['kullanicikaydi']['soyad'];
$eposta = $_SESSION['kullanicikaydi']['eposta'];	
	if($eposta==null){
		include("menu.php");
	}
	else{
	include("menu2.php");
	}
	$mysqli = new mysqli("localhost","root","","fuar");
	 mysqli_select_db($mysqli,"fuar");
	 mysqli_query($mysqli,"SET NAMES UTF8");
	$rowSet1 = mysqli_query($mysqli, $sql1 = "SELECT DISTINCT alan FROM fuarlar ;");
	$rowSet2 = mysqli_query($mysqli, $sql1 = "SELECT DISTINCT il FROM fuaryeri ;");
	
	?>
	
<html>
	<style>
	#ust { 
background-image:url(arkap.jpg); 

}
</style>
<body>
	<div style='width:80%;height:60%;margin:auto;background-color:#6959CD;' class="table-responsive">
	<table class='table' style='width:40%;margin:auto'><tr><form action="/kontrol.php">
	 <td><p style="font-family:arial;font-size:20px;color:white">İlgi Alanı:</p></td>
                <td><select name="ilgialanı" onchange="showselected(this.value);" style="width:134px">
                    <option value=0>Seçiniz</option>
                    <option value="araba">Araba</option>
                    <option value="denizcilik">Denizcilik</option>
					<option value="enerji">Enerji</option>
					<option value="gıda">Gıda</option>
                    <option value="kitap">Kitap</option>
					<option value="kozmetik">Kozmetik</option>
                    <option value="mobilya">Mobilya</option>
					<option value="oyuncak">Oyuncak</option>
                    <option value="saat">Saat</option>
					<option value="sağlık">Saglık</option>
					<option value="silah">Silah</option>
                    <option value="spor">Spor</option>
                    <option value="teknoloji">Teknoloji</option>
					<option value="tekstil">Tekstil</option>
					
                </select></td>
				<td><input type=submit value=Seç></input></td></tr>
				<input type=hidden name=islem value=ilgisec></input>
				</form>
				<tr><form action="/kontrol.php">
				<td><p style="font-family:arial;font-size:20px;color:white">Şehir:</p></td>
                <td><select name="sehir" onchange="showselected(this.value);" style="width:134px">
                    <option value=0>Seçiniz</option>
                    <option value="Adana">Adana</option>
                    <option value="Ankara">Ankara</option>
					<option value="Bursa">Bursa</option>
                    <option value="İstanbul">İstanbul</option>
					<option value="İzmir">İzmir</option>					
                </select></td>
				<td><input type=submit value=Seç></input></td></tr>
				<input type=hidden name=islem value=sehirsec></input>
				</form>
				<tr><form action="/kontrol.php">
				<td><p style="font-family:arial;font-size:20px;color:white">Tarih:</p></td>
				<td><input type="date" name="tarih" style="width:134px"></td>
				<td><input type="submit" name=islem value=Seç></td></tr>
				</form>
				<form action="/kontrol.php">
				<tr style ="text-align:center"><td colspan="3"><input type=submit value="Tüm Fuarları Göster"></input></td></tr></table>
				<input type=hidden name=islem value=hepsi></input>
				</form>

</form>

</div>
</body>



</html>
