<html>
    <style>
        p1{
            color:black;
            font-size: 15px;
        }
    </style>
<body background="arkap.jpg">
<div style="height:150px"></div>
<div><h1 style="text-align:center;font-family:arial">Kayıt Olun</h1></div>
	<div style="text-align:center"><form action="/kontrol.php">
		
		<input type=text name=isim value="Isim" style="width:400px;height:30px"></input>
		<br>
		<br>
		<input type=text name=soyisim value="Soyisim" style="width:400px;height:30px"></input>
                <br>
		<br>
                <input type=integer name=yas value="Yas" style="width:400px;height:30px"></input>
                <br>
		<br>
                <p1 style="font-family:arial">Cinsiyet:</p1>
                <select name="cinsiyet" onchange="showselected(this.value);" style="width:340px">
                    <option value=0>Seçiniz</option>
                    <option value="kadin">Kadin</option>
                    <option value="erkek">Erkek</option>
                </select>
		<br>
		<br>
                <p1 style="font-family:arial">İlgi Alanı</p1>
                <select name="ilgialanı" onchange="showselected(this.value);" style="width:340px">
                    <option value=0>Seçiniz</option>
                    <option value="araba">Araba</option>
                    <option value="denizcilik">Denizcilik</option>
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
					
                </select>
		<br>
		<br>
                <input type=text name=kullaniciadi value="E-Posta" style="width:400px;height:30px"></input>
		<br>
		<br>
                <input type=password name=sifre value="Sifre" style="width:400px;height:30px"></input>
		<br>
		<br>
                <input type=password name=sifre1 value="Sifre" style="width:400px;height:30px"></input>
                <br>
		<br>
		<input type=submit value=Kayıt></input>
		<input type=hidden name=islem value=kayit></input>
	
		</form>
	<h4>Zaten kullanıcıyım</h4>
	<a style="text-decoration:none;color:white" href='fuargiris.php'><b>Giriş Yap</b></a>
	</div>	
</html>
</body>

