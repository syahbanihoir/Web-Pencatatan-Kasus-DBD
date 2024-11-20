<?php
error_reporting(0);
    session_start();
    if(isset($_SESSION['login'])) {
        include("dashboard.php");
    }
    else {
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="asset/style/style_login1.css">

</head>

<body>

    <form class="card1" method="post" ">
        <h2 style=" text-align:center;">Login </h2>
        <br><br>
        <input type="text" id="nama" name="nama" placeholder="Nama User" required oninvalid="
                            this.setCustomValidity('Isi Username!')" oninput="this.setCustomValidity('')"
            autocomplete="off"><br><br>
        <input type="password" id="password" name="password" placeholder="Password" required oninvalid="
                            this.setCustomValidity('Isi Password!')" oninput="this.setCustomValidity('')"><br><br>
        <input type="submit" value="Masuk" name="masuk">
    </form>
    <script src="assets/styles/script.js"></script>
</body>

</html>
<?php

session_start();
include("koneksi.php");
if(isset($_POST['masuk'])){

$nama_pengguna = $_POST['nama'];
$password_pengguna = $_POST['password'];
$_SESSION['user'] = $nama_pengguna;
$sql = "SELECT * FROM user WHERE username='$nama_pengguna' AND katasandi='$password_pengguna'";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) == 1){
  $_SESSION['nama_pengguna'] = $nama_pengguna;
  $pesan = "Login berhasil";
  $_SESSION['login']=1;
  $pesan = "Login Berhasil";
  echo "<script>
        alert('$pesan');
        document.location='dashboard.php';
        </script>";
 
}
else{
  $pesan = "Login gagal. Periksa username dan password Anda";
  echo "<script>
        alert('$pesan');
        document.location='index.php';
        </script>";
}

}
}
?>