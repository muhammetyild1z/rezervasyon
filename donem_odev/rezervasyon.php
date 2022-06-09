  <!DOCTYPE html>
<html lang="tr">
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
</head>
<body>
<nav>
<div class="navbar">
    
<a class="logo" href="#" style="text-decoration: none; margin-bottom:7px;"><h2>İSte <em>tur</em></h2></a>

  <div class="navbar-sag">
    <a class="active" href="index.php">Anasayfa</a>
    <a class="" href="rezervasyon.php">Rezervasyon</a>
    <a class="" href="blog.php">Blog</a>
    <a class="" href="sorgu.php">Rezervasyon Sorgu</a>
    <a class="" href="iletisim.php">İletişim</a>
   
  </div>
</div>    
</nav>
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg); margin-top:-20px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Hayalindeki tatil için</h4><hr/>
              <h2>Oteller</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

  
    
<div class="container bootstrap snippets bootdey">
    <hr>
  <ol class="breadcrumb">
    <li style="font-size: 40px; font-weight:bold">Erken Rezervasyon Otelleri</li>
    
    </li>
  </ol>
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="well blog">
             
                  <div class="row">
                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                          <div class="image" style="height: 450px;">
                              <img src="./assets/urunler/urun1.jpg" alt="" style="height: 550px;">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <div class="blog-details">
                              <h2 style="margin-left:-20px ;">Fairyland Cave Hotel</h2>
                              <div style=margin-top:-5px;margin-left:-10px><i class='fa-solid fa-location-dot'></i><span style="margin-left:5px ;color:#f33f3f"> Torba, Bodrum, Muğla <span> </div>
                              <div class="border" style="float:left; width:50%; border:1px solid gray;padding-top:10px; margin:15px 5px 0 -10px; height:215px; border-radius:14px">
                                <strong style="margin-left: 5px; color:#f33f3f "> Otel olanakları</strong></br>
                                <ul>
                                  <li>Aquapark</li>
                                  <li>Açık Restoran</li>
                                  <li>Bar</li>
                                  <li>Kablosuz İnternet</li>
                                  <li>Otopark </li>
                                  <li>Açık Havuz</li>
                                  <li>Çamaşırhane <i>(Ücretli)</i></li> 
                                </ul>
                              </div>
                              <div style="float:left ; border:1px solid gray; padding-top:10px; width:50% ;margin:15px -15px 0 20px; border-radius:14px">
                                <strong style="margin-left: 5px; color:#f33f3f">Spor</strong>
                                <ul>
                                  <li>Fitness Merkezi</li>
                                  <li>Su Jimnastiği</li>
                                  <li>Spa Merkezi (Ücretli)</li>             
                                  <li>Su Sporları <i>(Ücretli)</i> </li>  
                                  <li>Tenis Kortu Aydınlatması <i>(Ücretli)</i></li> 
                                </ul>
                              </div>
                          </div>
                          <form action="" method="post" style="float: left; " >
                           <label style="margin-top: 25px;" >Gidiş Tarihi</label>
                           <input style="margin-left: 23px;width:125px;border-radius:5px" type="date" name="gidis1"> </br>
                           <label >Dönüş Tarihi</label>
                           <input  style="margin-left: 15px;margin-top: 10px; margin-bottom:10px;width:125px;border-radius:5px" type="date" name="donus1"></br>

                           <label >Yetişkin sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 2px;margin-top: 1px;border-radius:5px; " type="button" onclick="azalt()">-</button>
                          <input style="border-radius:5px" type="text" value="0" size="5" id="sayi" name="yetiskin">
                       <button class="btn btn-success btn-sm" type="button" style="border-radius:5px;" onclick="artir()">+</button></br>

                              <label >Çocuk sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 15px;margin-top: 1 px;border-radius:5px" type="button" onclick="azalt1()">-</button>
                            <input type="text" value="0" size="5" id="sayi1" name="cocuk" style="border-radius:5px; margin:10px 0 10px 0">
                         <button class="btn btn-success btn-sm" type="button" style="border-radius:5px" onclick="artir1()">+</button></br>

                         <label >Telefon</label>
                         <input type="text" style="margin-left: 53px;margin-top: 5px;width:125px;border-radius:5px" name="telefon" placeholder="xxx-xxx-xx-xx">

                         <button class="btn btn-outline-primary" style=" margin-top:15px ; margin-left:85px " type="submit" name="rezervasyon" >Hemen Rezervasyon yap </button>
                          </form>
                          <?php
  
$baglanti = new mysqli("localhost", "root", "", "i̇steturdb");
if(isset($_POST["rezervasyon"]))
{
  $gidis1=$_POST["gidis1"];
$donus1=$_POST["donus1"];
$yetiskin=$_POST["yetiskin"];
$cocuk=$_POST["cocuk"];
$telefon=$_POST["telefon"];

$sql="insert into fairyland_cave_hotel (Gidis,Donus,Yetiskin,cocuk,telefon) values('$gidis1','$donus1', '$yetiskin','$cocuk','$telefon')";
$sonuc=mysqli_query($baglanti,$sql);
if($sonuc){

  echo "<script type='text/javascript'>alert('Rezervasyon yapıldı');</script>";
  
}else{
  echo"Tekrar deneyin.";
}
mysqli_close($baglanti);
}
?>


                          </div>
                      </div>
                  </div>   
              </a>
          </div>
      </div>



      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="well blog">
             
                  <div class="row">
                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                          <div class="image" style="height: 450px;">
                              <img src="./assets/urunler/urun2.jpg" alt="" style="height: 550px;">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <div class="blog-details">
                              <h2 style="margin-left:-20px ;">Maxx Royal Kemer Resort</h2>
                              <div style=margin-top:-5px;margin-left:-10px><i class='fa-solid fa-location-dot'></i><span style="margin-left:5px ;color:#f33f3f"> Kiriş, Kemer, Antalya <span> </div>
                              <div class="border" style="float:left; width:50%; border:1px solid gray; padding-top:10px; margin:15px 5px 0 -10px; border-radius:14px">
                                <strong style="margin-left: 5px; color:#f33f3f "> Otel olanakları</strong>
                                <ul>
                                  <li>Çocuk Oyun Parkı</li>
                                  <li>Açık Restoran</li>
                                  <li>Çocuk Büfesi</li>
                                  <li>Kablosuz İnternet</li>
                                  <li>Tuz Odası </li>
                                  <li>Açık Havuz</li>
                                  <li>Buhar Odası <i>(Ücretli)</i></li> 
                                </ul>
                              </div>
                              <div style="float:left ; border:1px solid gray;  width:50% ;padding-top:10px;  ;margin:15px -15px 0 20px; border-radius:14px">
                                <strong style="margin-left: 5px;color:#f33f3f;">Spor</strong>
                                <ul>
                                  <li>Hamam</li>
                                  <li>Sauna</li>
                                  <li>Animasyon</li>             
                                  <li>Açık Havuz <i>(Ücretli)</i> </li>  
                                  <li>Basketbol </li> 
                                </ul>
                              </div>
                          </div>
                          <form action="" method="post" style="float: left;">
                           <label style="margin-top: 25px;" >Gidiş Tarihi</label>
                           <input style="margin-left: 23px;width:125px; border-radius:5px" type="date" name="gidis2"> </br>
                           <label >Dönüş Tarihi</label>
                           <input  style="width:125px;border-radius:5px;margin:10px 0 10px 15px" type="date" name="donus2"></br>

                           <label >Yetişkin sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 2px;margin-top: 1px;border-radius:5px; " type="button" onclick="azalt3()">-</button>
                          <input style="border-radius:5px" type="text" value="0" size="5" id="sayi3" name="yetiskin">
                       <button class="btn btn-success btn-sm" type="button" style="border-radius:5px;" onclick="artir3()">+</button></br>

                              <label >Çocuk sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 15px;margin-top: 5px;" type="button" onclick="azalt4()">-</button>
                            <input style="border-radius:5px;margin:10px 0 10px 0" type="text" value="0" size="5" id="sayi4" name="cocuk2">
                         <button  class="btn btn-success btn-sm" type="button" onclick="artir4()">+</button></br>

                         <label >Telefon</label>
                         <input type="text" style="margin-left: 53px;margin-top: 5px;width:125px;border-radius:5px" name="telefon2" placeholder="xxx-xxx-xx-xx">

                         <button  style=" margin-top:15px ; margin-left:85px; " type="submit" name="rezervasyon2" >Hemen Rezervasyon yap </button>
                          </form>
                          <?php
  
$baglanti = new mysqli("localhost", "root", "", "i̇steturdb");
if(isset($_POST["rezervasyon2"]))
{
  $gidis1=$_POST["gidis2"];
$donus1=$_POST["donus2"];
$yetiskin=$_POST["yetiskin2"];
$cocuk=$_POST["cocuk2"];
$telefon=$_POST["telefon2"];

$sql="insert into maxx_royal_kemer_resort (Gidis,Donus,Yetiskin,cocuk,telefon) values('$gidis1','$donus1', '$yetiskin','$cocuk','$telefon')";
$sonuc=mysqli_query($baglanti,$sql);
if($sonuc){

  echo "<script type='text/javascript'>alert('Rezervasyon yapıldı');</script>";
  
}else{
  echo"Tekrar deneyin.";
}
mysqli_close($baglanti);
}
?>
                          </div>
                      </div>
                  </div>   
              </a>
          </div>
      </div>
     
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="well blog">
             
                  <div class="row">
                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                          <div class="image" style="height: 450px;">
                              <img src="./assets/urunler/3.jpg" alt="" style="height: 550px;">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <div class="blog-details">
                              <h2 style="margin-left:-20px ;">Selectum Family Resort Belek</h2>
                              <div style=margin-top:-5px;margin-left:-10px><i class='fa-solid fa-location-dot'></i><span style="margin-left:5px ;color:#f33f3f"> Belek, Antalya <span> </div>
                              <div class="border" style="float:left; width:50%; border:1px solid gray; padding-top:10px; margin:15px 5px 0 -10px; border-radius:14px">
                                <strong style="margin-left: 5px;color:#f33f3f"> Otel olanakları</strong>
                                <ul>
                                  <li>Denize Sıfır</li>
                                  <li>Yoga</li>
                                  <li>Çocuk Büfesi</li>
                                  <li>Kablosuz İnternet</li>
                                  <li>Boccia</li>
                                  <li>Mini Kulüp</li>
                                  <li>Buhar Odası <i>(Ücretli)</i></li> 
                                </ul>
                              </div>
                              <div style="float:left ; border:1px solid gray;  padding-top:10px; width:50% ;margin:15px -15px 0 20px; border-radius:14px">
                                <strong style="margin-left: 5px;color:#f33f3f;">Spor</strong>
                                <ul>
                                  <li>Jakuzi</li>
                                  <li>Dart</li>
                                  <li>Animasyon</li>             
                                  <li>Masaj  <i>(Ücretli)</i> </li>  
                                  <li>Basketbol </li> 
                                </ul>
                              </div>
                          </div>
                          <form action="" method="post" style="float: left;">
                           <label style="margin-top: 25px;" >Gidiş Tarihi</label>
                           <input style="margin-left: 23px;width:125px;border-radius:5px" type="date" name="gidis3"> </br>
                           <label >Dönüş Tarihi</label>
                           <input  style="margin:10px 0 10px 15px;width:125px;border-radius:5px" type="date" name="donus3"></br>

                           <label >Yetişkin sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 2px;margin-top: 5px;" type="button" onclick="azalt5()">-</button>
                          <input style="border-radius:5px" type="text" value="0" size="5" id="sayi5" name="yetiskin3">
                       <button class="btn btn-success btn-sm" type="button" onclick="artir5()">+</button></br>

                              <label >Çocuk sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 15px;margin-top: 5px;" type="button" onclick="azalt6()">-</button>
                            <input style="border-radius:5px" type="text" value="0" size="5" id="sayi6" name="cocuk3">
                         <button class="btn btn-success btn-sm" type="button" onclick="artir6()">+</button></br>

                         <label >Telefon</label>
                         <input type="text" style="margin-left: 53px;margin-top: 5px;width:125px;border-radius:5px" name="telefon3" placeholder="xxx-xxx-xx-xx">

                         <button class="btn btn-outline-primary" style=" margin-top:15px ; margin-left:85px " type="submit" name="rezervasyon3" >Hemen Rezervasyon yap </button>
                          </form>
                          <?php
  
$baglanti = new mysqli("localhost", "root", "", "i̇steturdb");
if(isset($_POST["rezervasyon3"]))
{
  $gidis1=$_POST["gidis3"];
$donus1=$_POST["donus3"];
$yetiskin=$_POST["yetiskin3"];
$cocuk=$_POST["cocuk3"];
$telefon=$_POST["telefon3"];

$sql="insert into selectum_family_resort_belek (Gidis,Donus,Yetiskin,cocuk,telefon) values('$gidis1','$donus1', '$yetiskin','$cocuk','$telefon')";
$sonuc=mysqli_query($baglanti,$sql);
if($sonuc){

  echo "<script type='text/javascript'>alert('Rezervasyon yapıldı');</script>";
  
}else{
  echo"Tekrar deneyin.";
}
mysqli_close($baglanti);
}
?>
                          </div>
                      </div>
                  </div>   
              </a>
          </div>
      </div>  
                     
     
  
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="well blog">
             
                  <div class="row">
                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                          <div class="image" style="height: 450px;">
                              <img src="./assets/urunler/4.jpg" alt="" style="height: 550px;">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <div class="blog-details">
                              <h2 style="margin-left:-20px ;">Fun&Sun Family Life Belek</h2>
                              <div style=margin-top:-5px;margin-left:-10px><i class='fa-solid fa-location-dot'></i><span style="margin-left:5px ;color:#f33f3f"> Belek Boğazkent, Belek, Antalya <span> </div>
                              <div class="border" style="float:left; width:50%; border:1px solid gray; padding-top:10px; margin:15px 5px 0 -10px; border-radius:14px">
                                <strong style="margin-left: 5px;color:#f33f3f"> Otel olanakları</strong>
                                <ul>
                                  <li>Lobi</li>
                                  <li>Otopark</li>
                                  <li>Çocuk Büfesi</li>
                                  <li>Kablosuz İnternet</li>
                                  <li>Resepsiyon Hizmeti  </li>
                                  <li>Araç Kiralama <i>(Ücretli)</i></li> 
                                </ul>
                              </div>
                              <div style="float:left ; border:1px solid gray;  padding-top:10px; width:50% ;margin:15px -15px 0 20px; border-radius:14px">
                                <strong style="margin-left: 5px;color:#f33f3f;">Spor</strong>
                                <ul>
                                  <li>Masa Tenisi</li>
                                  <li>Sauna</li>
                                  <li>Animasyon</li>             
                                  <li>Kano  <i>(Ücretli)</i> </li>  
                                  <li>Basketbol </li> 
                                </ul>
                              </div>
                          </div>
                          <form action="" method="post" style="float: left;">
                           <label style="margin-top: 25px;" >Gidiş Tarihi</label>
                           <input style="margin-left: 23px;width:125px;border-radius:5px" type="date" name="gidis4"> </br>
                           <label >Dönüş Tarihi</label>
                           <input  style="margin:10px 0 10px 15px;width:125px;border-radius:5px" type="date" name="donus4"></br>

                           <label >Yetişkin sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 2px;margin-top: 5px;" type="button" onclick="azalt7()">-</button>
                          <input style="border-radius:5px"  type="text" value="0" size="5" id="sayi7" name="yetiskin4">
                       <button class="btn btn-success btn-sm" type="button" onclick="artir7()">+</button></br>

                              <label >Çocuk sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 15px;margin-top: 5px;" type="button" onclick="azalt8()">-</button>
                            <input style="border-radius:5px" type="text" value="0" size="5" id="sayi8" name="cocuk4">
                         <button class="btn btn-success btn-sm" type="button" onclick="artir8()">+</button></br>

                         <label >Telefon</label>
                         <input type="text" style="margin-left: 53px;margin-top: 5px;width:125px;border-radius:5px" name="telefon4" placeholder="xxx-xxx-xx-xx">

                         <button class="btn btn-outline-primary" style=" margin-top:15px ; margin-left:85px " type="submit" name="rezervasyon4" >Hemen Rezervasyon yap </button>
                          </form>
                          <?php
  
$baglanti = new mysqli("localhost", "root", "", "i̇steturdb");
if(isset($_POST["rezervasyon4"]))
{
  $gidis1=$_POST["gidis4"];
$donus1=$_POST["donus4"];
$yetiskin=$_POST["yetiskin4"];
$cocuk=$_POST["cocuk4"];
$telefon=$_POST["telefon4"];

$sql="insert into sun_family_life_belek (Gidis,Donus,Yetiskin,cocuk,telefon) values('$gidis1','$donus1', '$yetiskin','$cocuk','$telefon')";
$sonuc=mysqli_query($baglanti,$sql);
if($sonuc){

  echo "<script type='text/javascript'>alert('Rezervasyon yapıldı');</script>";
  
}else{
  echo"Tekrar deneyin.";
}
mysqli_close($baglanti);
}
?>
                          </div>
                      </div>
                  </div>   
              </a>
          </div>
      </div>
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="well blog">
             
                  <div class="row">
                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                          <div class="image" style="height: 450px;">
                              <img src="./assets/urunler/5.jpg" alt="" style="height: 550px;">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <div class="blog-details">
                              <h2 style="margin-left:-20px ;">Bodrum Park Resort</h2>
                              <div style=margin-top:-5px;margin-left:-10px><i class='fa-solid fa-location-dot'></i><span style="margin-left:5px ;color:#f33f3f"> Yalıçiftlik, Bodrum, Muğla <span> </div>
                              <div class="border" style="float:left; width:50%; border:1px solid gray; padding-top:10px; margin:15px 5px 0 -10px; border-radius:14px">
                                <strong style="margin-left: 5px;color:#f33f3f"> Otel olanakları</strong>
                                <ul>
                                  <li>Bar</li>
                                  <li>Açık Restoran</li>
                                  <li>Çocuk Büfesi</li>
                                  <li>Kablosuz İnternet</li>
                                  <li>Resepsiyon Hizmeti  </li>
                                  <li>Kuaför <i>(Ücretli)</i></li> 
                                  <li>İş Merkezi <i>(Ücretli)</i></li>
                                </ul>
                              </div>
                              <div style="float:left ; border:1px solid gray;  padding-top:10px; width:50% ;margin:15px -15px 0 20px; border-radius:14px">
                                <strong style="margin-left: 5px;color:#f33f3f;padding-top:10px; ">Spor</strong>
                                <ul>
                                  <li>Masa Tenisi</li>
                                  <li>Okçuluk</li>
                                  <li>Animasyon</li>             
                                  <li>Kano  <i>(Ücretli)</i> </li>  
                                  <li>Soft Animasyon </li> 
                                  <li>Plaj Voleybolu </li> 
                                </ul>
                              </div>
                          </div>
                          <form action="" method="post" style="float: left;">
                           <label style="margin-top: 25px;" >Gidiş Tarihi</label>
                           <input style="margin-left: 23px;width:125px;border-radius:5px" type="date" name="gidis5"> </br>
                           <label >Dönüş Tarihi</label>
                           <input  style="margin:10px 0 10px 15px;width:125px;border-radius:5px" type="date" name="donus5"></br>

                           <label >Yetişkin sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 2px;margin-top: 5px;" type="button" onclick="azalt9()">-</button>
                          <input style="border-radius:5px"  type="text" value="0" size="5" id="sayi9" name="yetiskin5">
                       <button class="btn btn-success btn-sm" type="button" onclick="artir9()">+</button></br>

                              <label >Çocuk sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 15px;margin-top: 5px;" type="button" onclick="azalt10()">-</button>
                            <input style="border-radius:5px" type="text" value="0" size="5" id="sayi10" name="cocuk5">
                         <button class="btn btn-success btn-sm" type="button" onclick="artir10()">+</button></br>

                         <label >Telefon</label>
                         <input type="text" style="margin-left: 53px;margin-top: 5px;width:125px;border-radius:5px" name="telefon5" placeholder="xxx-xxx-xx-xx">

                         <button class="btn btn-outline-primary" style=" margin-top:15px ; margin-left:85px " type="submit" name="rezervasyon5" >Hemen Rezervasyon yap </button>
                          </form>
                          <?php
  
$baglanti = new mysqli("localhost", "root", "", "i̇steturdb");
if(isset($_POST["rezervasyon5"]))
{
  $gidis1=$_POST["gidis5"];
$donus1=$_POST["donus5"];
$yetiskin=$_POST["yetiskin5"];
$cocuk=$_POST["cocuk5"];
$telefon=$_POST["telefon5"];

$sql="insert into bodrum_park_resort (Gidis,Donus,Yetiskin,cocuk,telefon) values('$gidis1','$donus1', '$yetiskin','$cocuk','$telefon')";
$sonuc=mysqli_query($baglanti,$sql);
if($sonuc){

  echo "<script type='text/javascript'>alert('Rezervasyon yapıldı');</script>";
  
}else{
  echo"Tekrar deneyin.";
}
mysqli_close($baglanti);
}
?>
                          </div>
                      </div>
                  </div>   
              </a>
          </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="well blog">
             
                  <div class="row">
                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                          <div class="image" style="height: 450px;">
                              <img src="./assets/urunler/6.jpg" alt="" style="height: 550px;">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <div class="blog-details">
                              <h2 style="margin-left:-20px ;">Bodrum Park Resort</h2>
                              <div style=margin-top:-5px;margin-left:-10px><i class='fa-solid fa-location-dot'></i><span style="margin-left:5px ;color:#f33f3f"> Yalıçiftlik, Bodrum, Muğla <span> </div>
                              <div class="border" style="float:left; width:50%; border:1px solid gray; padding-top:10px; margin:15px 5px 0 -10px; border-radius:14px">
                                <strong style="margin-left: 5px;color:#f33f3f"> Otel olanakları</strong>
                                <ul>
                                  <li>Bar</li>
                                  <li>Açık Restoran</li>
                                  <li>Çocuk Büfesi</li>
                                  <li>Kablosuz İnternet</li>
                                  <li>Resepsiyon Hizmeti  </li>
                                  <li>Kuaför <i>(Ücretli)</i></li> 
                                  <li>İş Merkezi <i>(Ücretli)</i></li>
                                </ul>
                              </div>
                              <div style="float:left ; border:1px solid gray; padding-top:10px; width:50% ;margin:15px -15px 0 20px; border-radius:14px">
                                <strong style="margin-left: 5px;color:#f33f3f">Spor</strong>
                                <ul>
                                  <li>Masa Tenisi</li>
                                  <li>Okçuluk</li>
                                  <li>Animasyon</li>             
                                  <li>Kano  <i>(Ücretli)</i> </li>  
                                  <li>Soft Animasyon </li> 
                                  <li>Plaj Voleybolu </li> 
                                </ul>
                              </div>
                          </div>
                          <form action="" method="post" style="float: left;">
                           <label style="margin-top: 25px;" >Gidiş Tarihi</label>
                           <input style="margin-left: 23px;width:125px;border-radius:5px" type="date" name="gidis6"> </br>
                           <label >Dönüş Tarihi</label>
                           <input  style="margin:10px 0 10px 15px;width:125px;border-radius:5px" type="date" name="donus6"></br>

                           <label >Yetişkin sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 2px;margin-top: 5px;" type="button" onclick="azalt11()">-</button>
                          <input style="border-radius:5px" type="text" value="0" size="5" id="sayi11" name="yetiskin6">
                       <button class="btn btn-success btn-sm" type="button" onclick="artir11()">+</button></br>

                              <label >Çocuk sayısı</label>
                           <button class="btn btn-danger btn-sm" style="margin-left: 15px;margin-top: 5px;" type="button" onclick="azalt12()">-</button>
                            <input style="border-radius:5px" type="text" value="0" size="5" id="sayi12" name="cocuk6">
                         <button class="btn btn-success btn-sm" type="button" onclick="artir12()">+</button></br>

                         <label >Telefon</label>
                         <input type="text" style="margin-left: 53px;margin-top: 5px;width:125px;border-radius:5px" name="telefon6" placeholder="xxx-xxx-xx-xx">

                         <button class="btn btn-outline-primary"  style=" margin-top:15px ; margin-left:85px " type="submit" name="rezervasyon6" >Hemen Rezervasyon yap </button>
                          </form>
                          <?php
  
$baglanti = new mysqli("localhost", "root", "", "i̇steturdb");
if(isset($_POST["rezervasyon6"]))
{
  $gidis1=$_POST["gidis6"];
$donus1=$_POST["donus6"];
$yetiskin=$_POST["yetiskin6"];
$cocuk=$_POST["cocuk6"];
$telefon=$_POST["telefon6"];

$sql="insert into bodrum_park_resort (Gidis,Donus,Yetiskin,cocuk,telefon) values('$gidis1','$donus1', '$yetiskin','$cocuk','$telefon')";
$sonuc=mysqli_query($baglanti,$sql);
if($sonuc){

  echo "<script type='text/javascript'>alert('Rezervasyon yapıldı');</script>";
  
}else{
  echo"Tekrar deneyin.";
}
mysqli_close($baglanti);
}
?>
                          </div>
                      </div>
                  </div>   
              </a>
          </div>
      </div>
  



 

  
      

      <footer style="margin-top: 11%;display: block;
  
  width: 95%;">
      
        <div class="row">
          
            <div class="inner-content"></hr>
              <p>Copyright © 2020 Company Name - <a href="#">İstetur.com</a></p>
            </div>
          
        
      </div>
    </footer>
         
      
   
</body>
</html>