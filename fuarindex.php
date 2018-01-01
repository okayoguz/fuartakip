<!doctype html>
<html lang="en">
  <head>
    <title>FuarAway</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
<style>

table {
    border-collapse: collapse;
	
}

	table, th, td {
   border: 1px solid black;
   background-color:#4a4f9e;	
}

a.tasarım{

color:white;
font-family:arial;
text-decoration:none;
font-weight: bold

}

a.tasarım:active {
	text-decoration: none;  
	font-weight: bold
}

a.tasarım:hover{
	color:#ff5a00;
	font:verdana;
	text-decoration:none;
	
}

#flipkart-navbar {
    background-color: #2874f0;
    color: #FFFFFF;
}

.row1{
    padding-top: 20px;
}

.row2 {
    padding-bottom: 0px;
}

.flipkart-navbar-input {
    padding: 11px 16px;
    border-radius: 2px 0 0 2px;
    border: 0 none;
    outline: 0 none;
    font-size: 15px;
}

.flipkart-navbar-button {
    background-color: #ffe11b;
    border: 1px solid #ffe11b;
    border-radius: 0 2px 2px 0;
    color: #565656;
    padding: 10px 0;
    height: 43px;
    cursor: pointer;
}

.cart-button {
    background-color: #2469d9;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
    padding: 10px 0;
    text-align: center;
    height: 41px;
    border-radius: 2px;
    font-weight: 500;
    width: 120px;
    display: inline-block;
    color: #FFFFFF;
    text-decoration: none;
    color: inherit;
    border: none;
    outline: none;
}

.cart-button:hover{
    text-decoration: none;
    color: #fff;
    cursor: pointer;
}

.cart-svg {
    display: inline-block;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    margin-right: 8px;
}

.item-number {
    border-radius: 3px;
    background-color: rgba(0, 0, 0, .1);
    height: 20px;
    padding: 3px 6px;
    font-weight: 500;
    display: inline-block;
    color: #fff;
    line-height: 12px;
    margin-left: 10px;
}

.upper-links {
    display: inline-block;
    padding: 0 11px;
    line-height: 23px;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 0;
    color: inherit;
    border: none;
    outline: none;
    font-size: 12px;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-bottom: 0px;
}

.dropdown:hover {
    background-color: #fff;
}

.dropdown:hover .links {
    color: #000;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    display: none;
    background-color: #fff;
    color: #333;
    left: 0px;
    border: 0;
    border-radius: 0;
    box-shadow: 0 4px 8px -3px #555454;
    margin: 0;
    padding: 0px;
}

.links {
    color: #fff;
    text-decoration: none;
}

.links:hover {
    color: red;
    text-decoration: none;
}

.profile-links {
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
    border-bottom: 1px solid #e9e9e9;
    box-sizing: border-box;
    display: block;
    padding: 0 11px;
    line-height: 23px;
}

.profile-li{
    padding-top: 2px;
}

.largenav {
    display: none;
}

.smallnav{
    display: block;
}

.smallsearch{
    margin-left: 15px;
    margin-top: 15px;
}

.menu{
    cursor: pointer;
}

@media screen and (min-width: 768px) {
    .largenav {
        display: block;
    }
    .smallnav{
        display: none;
    }
    .smallsearch{
        margin: 0px;
    }
}

/*Sidenav*/
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    box-shadow: 0 4px 8px -3px #555454;
    padding-top: 0px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color: #fff;        
}

@media screen and (max-height: 450px) {
  .sidenav a {font-size: 18px;}
}

.sidenav-heading{
    font-size: 36px;
    color: #fff;
}

</style>
<head>
<meta charset="UTF-8"/>
</head>
<body>
    
<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
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
	?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover" style="width:80%;margin:auto">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="araba.jpg" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    <h1 style="color:red">LÜKS OTOMOBİL FUARI 17 OCAK 2018'DE TÜYAP FUAR VE KONGRE MERKEZİ'NDE</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="kitap.jpg" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
    <h1 style="color:red">KİTAP FUARI 4 OCAK 2018'DE İSTANBUL FUAR MERKEZİ'NDE</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="enerji.jpg" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block">
    <h1 style="color:red">YENİLENEBİLİR ENERJİ FUARI 28 OCAK 2018'DE ATATÜRK KÜLTÜR MERKEZİ'NDE</h1>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<br>
<div class="card-group" style="width:80%;text-align:center;margin:auto">
  <div class="card">
    <img style="height:47%" class="card-img-top" src="saat.jpg" alt="Card image cap">
    <div style="height:27%" class="card-body">
      <p class="card-text">Klasik Saat Fuarı<br>16 Ocak 2018<br>Sheraton - Ankara</p>
    </div>
  </div>
  <div class="card">
    <img style="height:47%" class="card-img-top" src="kozmetik.jpg" alt="Card image cap">
    <div style="height:27%" class="card-body">
      <p class="card-text">Makyaj Fuarı<br>2 Şubat 2018<br>Dünya Ticaret Merkezi - İstanbul</p>
    </div>
  </div>
  <div class="card">
    <img style="height:47%" class="card-img-top" src="mobilya.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">Ev Eşyaları Fuarı<br>19 Ocak 2018<br>Atis Fuarcılık - Ankara</p>
    </div>
  </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<script>


function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
</script>

</html>
