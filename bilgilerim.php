<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$ad = $_SESSION['kullanicikaydi']['ad'];
$soyad = $_SESSION['kullanicikaydi']['soyad'];
$yas = $_SESSION['kullanicikaydi']['yas'];
$cins= $_SESSION['kullanicikaydi']['cins'];
$ilgi = $_SESSION['kullanicikaydi']['ilgi'];
$eposta = $_SESSION['kullanicikaydi']['eposta'];
$sifre = $_SESSION['kullanicikaydi']['sifre'];
include("menu2.php");
?>
<html>
    <style>
        p1{
            color:white;
            font-size: 20px;
        }
    </style>
<body>
<div></div>
	<div style='width:80%;margin:auto;background-color:#6959CD;opacity:0.9;' class='table-responsive'><table class='table' style='width:40%;margin:auto'><form action="/kontrol.php">
		<?php 
		echo "<tr><td><p1 style='font-family:arial'>Ad:</p1></td><td><input type=text name=isim value='$ad'></input></td></tr>
		<tr><td><p1 style='font-family:arial'>Soyad:</p1></td><td><input type=text name=soyisim value='$soyad'></input></td></tr>
        <tr><td><p1 style='font-family:arial'>Yaş:</p1></td><td><input type=integer name=yas value='$yas'></input></td></tr>
        <tr><td><p1 style='font-family:arial'>Cinsiyet:</p1></td><td><select name='cinsiyet' onchange='showselected(this.value);'>
                    <option value='$cins'>$cins</option>
                    <option value='kadin'>Kadın</option>
                    <option value='erkek'>Erkek</option>
                </select></td></tr>
		<tr><td><p1 style='font-family:arial'>İlgi Alanı:</p1></td>
                <td><select name='ilgialanı' onchange='showselected(this.value);'>
                    <option value='$ilgi'>$ilgi</option>
                    <option value='araba'>Araba</option>
                    <option value='denizcilik'>Denizcilik</option>
					<option value='gıda'>Gıda</option>
                    <option value='kitap'>Kitap</option>
					<option value='kozmetik'>Kozmetik</option>
                    <option value='mobilya'>Mobilya</option>
					<option value='oyuncak'>Oyuncak</option>
                    <option value='saat'>Saat</option>
					<option value='sağlık'>Saglık</option>
					<option value='silah'>Silah</option>
                    <option value='spor'>Spor</option>
                    <option value='teknoloji'>Teknoloji</option>
					<option value='tekstil'>Tekstil</option>
					
                </select></td></tr>
		<tr><td><p1 style='font-family:arial'>Şifre:</p1></td><td><input type=password name=sifre value='$sifre'></input></td></tr>
		<tr><td><p1 style='font-family:arial'>Şifre Tekrar:</p1></td><td><input type=password name=sifre1 value='$sifre'></input></td></tr>
		";
		?>


		<tr><td colspan="2" style="text-align:center"><input type=submit value=Güncelle></input></td>
		<input type=hidden name=islem value=guncelle></input></tr>
	
		</form>
	</table></div>	
</html>
</body>