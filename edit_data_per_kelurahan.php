<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        include("index.php");
    }
    else {
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="asset/style/styles.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <table>
            <tr>
                <td><img src="asset/image/logo_kota_adminis_jaksel.png" alt="Logo Kota Administrasi Jakarta Selatan"
                        class="featured-image"></td>
                <td>
                    <h2>DATA BERSIH KASUS DEMAM BERDARAH <br>KOTA ADMINISTRASI JAKARTA SELATAN</h2>
                </td>
            </tr>
        </table>
    </header>

    <section>

        <!-- -------------->
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="data-per-kelurahan.php">Per kelurahan</a></li>
                <li><a href="data-per-kecamatan.php">Per kecamatan</a></li>
                <li><a href="seluruhdata.php">Seluruh Wilayah Jakarta Selatan</a>
                <li><a href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
        <!-- -------------->

        <article>
            <div class="card" style="margin-bottom: 10px; padding: 2px;">
                <p style="font-size:18px; font-weight: bold; padding-left: 5px; margin-top: 10px; margin-bottom: 10px;">
                    <a href="data-per-kelurahan.php">Per Kelurahan</a>&nbsp;/&nbsp;Edit</a>
                </p>
            </div>

            <div class="cardedit">
                <h3 style="margin-bottom:25px; font-size: 15px; text-align: center; margin-top: 0;">
                    FORM EDIT
                </h3>
                <?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id = $_GET['id'];
$kecamatan = $_GET['kecamatan'];
$query = "SELECT * FROM $kecamatan WHERE id=$id";
$sql = mysqli_query($conn, $query);
if ($sql) {
$row = mysqli_fetch_array($sql);
$kelurahan = $row['kelurahan'];
}

?>
                <form action="" method="post" class="card2">
                    <label for="kecamatan">Kelurahan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                        <input id="kecamatan" type="text" name="kecamatan" value="<?= $row['kelurahan'] ?>" readonly />
                    </label><br /><br />
                    <label for="bulan">Bulan
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
                        <select name="bulan" id="bulan">
                            <option value="jan">januari</option>
                            <option value="feb">februari</option>
                            <option value="maret">maret</option>
                            <option value="april">april</option>
                            <option value="mei">mei</option>
                            <option value="juni">juni</option>
                            <option value="juli">juli</option>
                            <option value="ags">agustus</option>
                            <option value="sept">september</option>
                            <option value="okt">oktober</option>
                            <option value="novr">november</option>
                            <option value="des">desember</option>
                        </select></label><br /><br />
                    <label for="jumlah_kasus">Jumlah Kasus&nbsp;&nbsp;:&nbsp;<input id="jumlah_kasus" value="0"
                            type="number" name="jumlah_kasus" min="0" step="any" placeholder="Jumlah Kasus" required
                            oninvalid="
                            this.setCustomValidity('Isi jumlah kasus DBD!')" oninput="this.setCustomValidity('')" />
                    </label>
                    <br />
                    <br />
                    <input class="submit btn2" type="submit" name="edit" value="Edit" />
                    <input type="hidden" name="update" value="<?= $id ?>">
                </form>


                <?php 

   if(isset($_POST['update'])) {
      $bulan     = $_POST['bulan'];
      $jumlah_kasus     = $_POST['jumlah_kasus'];
      $query = "UPDATE $kecamatan SET $bulan = $jumlah_kasus WHERE $kecamatan .id = $id";
      $exequery = mysqli_query($conn, $query) ;

      if ($exequery) {
        $pesan = "berhasil di update";
        echo "<script>
        alert('$pesan');
        document.location='data-per-kelurahan.php?pesan=$kecamatan';
        </script>";
    } else {
        $pesan = "gagal update";
        echo "<script>
        alert('$pesan');
        document.location='data-per-kelurahan.php';
        </script>";
    }

   }
 
      ?>
            </div>
        </article>
    </section>
    <footer>
        <p>Copyright &copy;2023</p>
    </footer>

</body>
<?php
    }?>