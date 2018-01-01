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

	table, th, td {
   background-color:#6959CD;	
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

.myOtherTable { background-color:#FFFFCC;border-collapse:collapse;color:#000;font-size:18px;width:1000px;text-align:center;border:3px dashed black; }
.myOtherTable th { background-color:#660000;color:white; }
.myOtherTable td, .myOtherTable th { padding:5px;border:0; }
.myOtherTable td { border-bottom:1px dotted #BDB76B; }

#flipkart-navbar {
    background-color: #6959CD;
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
    background-color: #6959CD;
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
<body background="duvar.jpg">
	<div style="width:80%;margin:auto;"><a href="fuargiris.php" class="badge badge-primary" style="float:right;font-size:110%">Giriş/Kayıt Ol</a></div>
	
	<br><br>
	
	<div class="card d-none d-md-block" style="width:80%;margin:auto;text-align:center">
  <img style="width:30%;margin:auto" class="card-img-top" src="fuaraway.png" alt="Card image cap">
</div>
<br>
<div id="flipkart-navbar" style="width:80%;margin:auto;text-align:center;height:40px"> 
        
            <ul class="largenav pull-right">
                <li style="font-size:23px;margin-top:9px" class="upper-links"><a class="links" href="fuarindex.php">Anasayfa</a></li>
                <li style="font-size:23px" class="upper-links"><a class="links" href="fuarlar.php">Fuarlar</a></li>
                <li style="font-size:23px" class="upper-links"><a class="links" href="önerilenler.php">Önerilenler</a></li>
                <li style="font-size:23px" class="upper-links"><a class="links" href="gittiklerim.php">Gittiklerim</a></li>
            </ul>
        
	 <div style="background-color:white;background-image:url('fuaraway.png');background-size:80%;background-repeat: no-repeat;background-position:75% 40%;margin:auto;text-align:center" class="row row2">
                <h2 style="font-size:34px;margin:0px;float:left;color:black"><span class="smallnav menu" onclick="openNav()">☰</span></h2>
            
        </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">FUARAWAY</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="fuarindex.php">Anasayfa</a>
    <a href="fuarlar.php">Fuarlar</a>
    <a href="fuarlar.php">Önerilenler</a>
    <a href="gittiklerim.php">Gittiklerim</a>
</div>
<br>
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
