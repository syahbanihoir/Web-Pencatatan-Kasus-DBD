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
            <?php
include_once "koneksi.php";
    
    ?>

            <div class="card" style="margin-bottom: 10px; padding: 2px;">
                <p style="font-size:18px; font-weight: bold; padding-left: 5px; margin-top: 10px; margin-bottom: 10px;">
                    Seluruh Wilayah Jakarta Selatan</p>
            </div>

            <div class="card">
                <h3 style="font-size: 15px; text-align: center; margin-top: 0;">
                    DATA KASUS DBD BERSIH BERSUMBER SURVEILANS AKTIF RUMAH SAKIT
                    <br> PER BULAN & KELURAHAN DI WILAYAH JAKARTA SELATAN
                </h3>
                <button class="btn-seluruh">
                    <a target="_blank" href="export_excel_seluruh_data.php">Download</a>
                </button>
                <table class="tabel-layout" border="1" cellpadding="5">

                    <tr class="k">
                        <th>NO</th>
                        <th>Kelurahan</th>
                        <th>Januari</th>
                        <th>Februari</th>
                        <th>Maret</th>
                        <th>April</th>
                        <th>Mei</th>
                        <th>Juni</th>
                        <th>Juli</th>
                        <th>Agustus</th>
                        <th>September</th>
                        <th>Oktober</th>
                        <th>November</th>
                        <th>Desember</th>
                        <th align=" center">Jumlah</th>

                    </tr>
                    <?php
  
    $query = "SELECT *, (jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des) AS total_nilai FROM (SELECT * FROM kecamatan_cilandak WHERE id UNION SELECT * FROM kecamatan_jagakarsa WHERE id UNION SELECT * FROM kecamatan_kebayoran_baru 
    WHERE id UNION SELECT * FROM kecamatan_kebayoran_lama WHERE id UNION SELECT * FROM kecamatan_mampang_prapatan WHERE id
     UNION SELECT * FROM kecamatan_pancoran WHERE id UNION SELECT * FROM kecamatan_pasar_minggu WHERE id UNION SELECT * FROM kecamatan_pesanggrahan WHERE
     id UNION SELECT * FROM kecamatan_setia_budi WHERE
      id UNION SELECT * FROM kecamatan_tebet WHERE id) AS tabel_union order by total_nilai DESC";

    $sql = mysqli_query($conn, $query);
        $no = 1;
        while ($row = mysqli_fetch_array($sql)) {
            $kelurahan = $row['kelurahan'];
            $jan = $row['jan'];
            $feb = $row['feb'];
            $maret = $row['maret'];
            $april = $row['april'];
            $mei = $row['mei'];
            $juni = $row['juni'];
            $juli = $row['juli'];
            $ags = $row['ags'];
            $sept = $row['sept'];
            $okt = $row['okt'];
            $nov = $row['nov'];
            $des = $row['des'];
            $total = $row['total_nilai'];
            
    ?>
                    <tr>
                        <td align="center"><?php echo $no++ ?></td>
                        <td align="center"><?php echo $kelurahan ?></td>
                        <td align="center"><?php echo $jan ?></td>
                        <td align="center"><?php echo $feb ?></td>
                        <td align="center"><?php echo $maret ?></td>
                        <td align="center"><?php echo $april ?></td>
                        <td align="center"><?php echo $mei ?></td>
                        <td align="center"><?php echo $juni ?></td>
                        <td align="center"><?php echo $juli ?></td>
                        <td align="center"><?php echo $ags ?></td>
                        <td align="center"><?php echo $sept?></td>
                        <td align="center"><?php echo $okt ?></td>
                        <td align="center"><?php echo $nov ?></td>
                        <td align="center"><?php echo $des ?></td>
                        <td align="center" class="a"><?php echo $total ?></td>

                    </tr>
                    <?php } ?>

                    <?php
                $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept) AS jumlah_september,SUM(okt) 
                AS jumlah_oktober,SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM 
                (SELECT * FROM kecamatan_cilandak WHERE id UNION SELECT * FROM kecamatan_jagakarsa WHERE id 
                UNION SELECT * FROM kecamatan_kebayoran_baru WHERE id UNION SELECT * FROM kecamatan_kebayoran_lama WHERE id
                 UNION SELECT * FROM kecamatan_mampang_prapatan WHERE id UNION SELECT * FROM kecamatan_pancoran WHERE id 
                 UNION SELECT * FROM kecamatan_pasar_minggu WHERE id UNION SELECT * FROM kecamatan_pesanggrahan WHERE id 
                 UNION SELECT * FROM kecamatan_setia_budi WHERE id UNION SELECT * FROM kecamatan_tebet WHERE id) AS tabel_union";

        $total = mysqli_query($conn, $q);

        while ($row = mysqli_fetch_array($total)) {
        $jumlah_jan = $row['jumlah_januari'];
        $jumlah_feb = $row['jumlah_februari'];
        $jumlah_mar = $row['jumlah_maret'];
        $jumlah_apr = $row['jumlah_april'];
        $jumlah_mei = $row['jumlah_mei'];
        $jumlah_juni = $row['jumlah_juni'];
        $jumlah_juli = $row['jumlah_juli'];
        $jumlah_ags = $row['jumlah_ags'];
        $jumlah_september = $row['jumlah_september'];
        $jumlah_oktober = $row['jumlah_oktober'];
        $jumlah_november = $row['jumlah_november'];
        $jumlah_des = $row['jumlah_desember'];
        $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
        $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
         $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
  
                ?>
                    <tr class="a">
                        <th></th>
                        <th>JAKARTA SELATAN</th>
                        <th><?php echo $jumlah_jan ?></th>
                        <th><?php echo $jumlah_feb ?></th>
                        <th><?php echo $jumlah_mar ?></th>
                        <th><?php echo $jumlah_apr ?></th>
                        <th><?php echo $jumlah_mei ?></th>
                        <th><?php echo $jumlah_juni ?></th>
                        <th><?php echo $jumlah_juli ?></th>
                        <th><?php echo $jumlah_ags ?></th>
                        <th><?php echo $jumlah_september ?></th>
                        <th><?php echo $jumlah_oktober ?></th>
                        <th><?php echo $jumlah_november ?></th>
                        <th><?php echo $jumlah_des ?></th>
                        <th><?php echo $jumlah_seluruh ?></th>
                    </tr>
                    <?php } ?>

                </table>
            </div>
        </article>
    </section>
    <footer>
        <p>Copyright &copy;2023</p>
    </footer>

</body>

</html>
<?php
    }?>