<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>istetur  |   Rezervasyon</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="./assets/images/logo.ico">
    <script src="https://kit.fontawesome.com/73c92273b4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script> 
<script src="assets/script.js"></script>
<style>


body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
}
</style>

  <body>


    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
   

    <!-- Header -->
    <header>
<nav>
<div class="navbar">
    
<a class="logo" href="index.php" style="text-decoration: none; margin-bottom:7px;"><h2>İSte <em>tur</em></h2></a>

  <div class="navbar-sag">
    <a class="active" href="index.php">Anasayfa</a>
    <a class="" href="rezervasyon.php">Rezervasyon</a>
    <a class="blog.php" href="blog.php">Blog</a>
    <a class="" href="sorgu.php">Rezervasyon Sorgu</a>
    <a class="" href="iletisim.php">İletişim</a>
    
  </div>
</div>    
</nav>


        
      </div>
    </div>    
    </header>

    
    <div class="input-group"  style="margin-left: 30%; margin-top:15%">
    <label style="background-color: #f3f33f; margin-bottom:30px;margin-left:160px">Rezervasyon Kontrol et</label>
  <div class="form-outline">
     <form action="sorgu.php" method="POST">
    
   

    <select name="otel" id="" style="border-radius:5px;width:500px;height:35px;margin-top:0px;float: left;">
        <option value="fairyland_cave_hotel">Fairyland Cave Hotel</option>
        <option value="maxx_royal_kemer_resort">Maxx Royal Kemer Resort</option>
        <option value="selectum_family_resort_belek">Selectum Family Resort Belek</option>
        <option value="sun_family_life_belek">Fun&Sun Family Life Belek</option>
        <option value="bodrum_park_resort">Bodrum Park Resort</option>
    </select>
    <button name="button" type="submit" class="btn btn-primary" style="float: left; position:absolute;margin-left:10px">

<i class="fas fa-search"></i>
</button>
 
</div></div></form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gidiş</th>
      <th scope="col">Dönüş</th>
      <th scope="col">Telefon</th>
    </tr>
  </thead>
<?php

$baglanti = new mysqli("localhost", "root", "", "i̇steturdb");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$otel = $_POST['otel'];

   
  $sorgu = "select * from $otel";
$komut=mysqli_query($baglanti,$sorgu);
$satirsayisi=mysqli_num_rows($komut);
for ($i=1;$i<=$satirsayisi;$i++) {
$sorgusonucu=$komut->fetch_assoc();
$Gidis=$sorgusonucu['Gidis'];
$Donus=$sorgusonucu['Donus'];
$Yetiskin=$sorgusonucu['Yetiskin'];
$cocuk=$sorgusonucu['cocuk'];
$Telefon=$sorgusonucu['Telefon'];
echo "
<tbody>
    <tr>
      <th scope='row'>$i</th>
      <td>$Gidis</td>
      <td>$Donus</td>
      <td>$Telefon</td>
    </tr>
    
  </tbody>

";







}
?>
    <footer >
      
      <div class="row" style="position: absolute;width: 100%; margin:900px 0 0 0;text-align: center;
        
        background-color: #232323;"> 
        
          <div class="inner-content" style="border-top: 1px solid #f1f1f1;
        
        padding: 25px 0px; 
       "></hr>
            <p >Copyright © 2020 Company Name - <a href="index.php" style="color: #f33f3f;
        margin-left: 3px;">İstetur.com</a></p>
          </div>
        
      
    </div>
  </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
