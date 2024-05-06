<?php
    include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WEB Galeri Foto</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1> <a href="index.php"style="font-family: serif">SMK 1 TRIPLE "J"</h1>
        <ul>
        <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #2600ad;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body style="background-color:white;">
<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="galeri.php">Galeri</a>
    <a href="login.php">Login Admin</a>
  </div>
</div>
</body>
        </ul>
        </div>
    </header>
    
    <!-- search -->
    <div class="search">
        <div class="container">
            <form action="galeri.php">
                <input type="text" name="search" placeholder="Cari Foto" />
                <input type="submit" name="cari" value="Cari Foto" />
            </form>
        </div>
    </div>
    
    <!-- category -->
    <div class="section" >
        <div class="container">
                <?php
                    $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
					if(mysqli_num_rows($kategori) > 0){
						while($k = mysqli_fetch_array($kategori)){
				?>
                    <a href="galeri.php?kat=<?php echo $k['category_id'] ?>">
                        <div class="col-5">
                            <img src="img/6488533.png" width="50px" style="margin-bottom:5px;" />
                        <p><?php echo $k['category_name'] ?></p>
                        </div>
                    </a>
                <?php }}else{ ?>
                     <p>Kategori tidak ada</p>
                <?php } ?>
            </div>
    </div>
    
    <!-- new product -->
    <div class="container">
       <h3 style="text-align:center">GALERY SEKOLAH</h3>
       <div class="box">
          <?php
              $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_status = 1 ORDER BY image_id DESC LIMIT 8");
			  if(mysqli_num_rows($foto) > 0){
				  while($p = mysqli_fetch_array($foto)){
		  ?>
          <a href="detail-image.php?id=<?php echo $p['image_id'] ?>">
          <div class="col-4">
              <img src="foto/<?php echo $p['image'] ?>" height="200px" />
          </div>
          </a>
          <?php }}else{ ?>
              <p>Foto tidak ada</p>
          <?php } ?>
       </div>
    </div>
    <div class="container">
       <h3 style="text-align:center">INFORMASI TERKINI</h3>
       <div class="box">
          <?php
              $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE category_id = 14 ORDER BY image_id DESC LIMIT 10");
			  if(mysqli_num_rows($foto) > 0){
				  while($p = mysqli_fetch_array($foto)){
		  ?>
          <a href="detail-image.php?id=<?php echo $p['image_id'] ?>">
          <div class="col-4">
            <p class="nama"><?php echo substr($p['image_name'], 0, 30)  ?></p>
              <img src="foto/<?php echo $p['image'] ?>" height="190px" />
          </div>
          </a>
          <?php }}else{ ?>
              <p>Foto tidak ada</p>
          <?php } ?>
       </div>
    </div>
    <div class="container">
       <h3 style="text-align:center">AGENDA SEKOLAH</h3>
    <div class="box">
          <?php
              $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE category_id = 15 ORDER BY image_id DESC LIMIT 10");
			  if(mysqli_num_rows($foto) > 0){
				  while($p = mysqli_fetch_array($foto)){
		  ?>
          <a href="detail-image.php?id=<?php echo $p['image_id'] ?>">
          <div class="col-4">
            <p class="nama"><?php echo substr($p['image_name'], 0, 30)  ?></p>
              <img src="foto/<?php echo $p['image'] ?>" height="150px" />
              <p class="nama"><?php echo $p['date_created']  ?></p>
          </div>
          </a>
          <?php }}else{ ?>
              <p>Foto tidak ada</p>
          <?php } ?>
       </div>
    </div>
    <div class="container">
       <h3 style="text-align:center">MAPS</h3>
       <div class="box">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.287964129738!2d106.86433137402894!3d-6.48516996340398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c15f22b23331%3A0x152d0f1eb6ef7c6c!2sSMKS%201%20Triple%20J!5e0!3m2!1sid!2sid!4v1713939629353!5m2!1sid!2sid" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <img src="img/konsep.jpg" width="600px"  style="margin-bottom:15px;" />
     </div>
    </div>
</body>
</html>