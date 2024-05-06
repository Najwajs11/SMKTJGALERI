<?php
    session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
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
  <button class="dropbtn">Manajemen Admin</button>
  <div class="dropdown-content">
  <a href="dashboard.php">Dashboard</a>
  <a href="profil.php">Profil</a>
  <a href="data-image.php">Post Foto</a>
<a href="registrasi.php">Tambah akun </a>
<a href="Keluar.php">Keluar</a>
  </div>
</body>
        </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
                <h2 style="font-family: cursive; color:#2600ad">Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Website Galeri Foto</h2>
            </div>
    </div>
    
 
</body>
</html>