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
                    Per Kelurahan</p>
            </div>

            <div class="card">
                <h3 style="margin-bottom:25px; font-size: 15px; text-align: center; margin-top: 0;">DATA BERSIH KASUS
                    DEMAM
                    BERDARAH
                    PERKELURAHAN
                </h3>
                <form id="form" method="post" action="data-per-kelurahan.php"
                    style="display: inline; padding-bottom: 10px;">
                    <label for="kecamatan">Pilih Kecamatan :</label>
                    <select name="kecamatan" id="kecamatan">
                        <option value="kecamatan_cilandak">kecamatan cilandak</option>
                        <option value="kecamatan_jagakarsa">kecamatan jagakarsa</option>
                        <option value="kecamatan_kebayoran_baru">kecamatan kebayoran baru</option>
                        <option value="kecamatan_kebayoran_lama">kecamatan kebayoran lama</option>
                        <option value="kecamatan_pancoran">kecamatan pancoran</option>
                        <option value="kecamatan_mampang_prapatan">kecamatan mampang prapatan</option>
                        <option value="kecamatan_pasar_minggu">kecamatan pasar minggu</option>
                        <option value="kecamatan_pesanggrahan">kecamatan pesanggrahan</option>
                        <option value="kecamatan_setia_budi">kecamatan setia budi</option>
                        <option value="kecamatan_tebet">kecamatan tebet</option>
                    </select>
                    <button class="btn1" id="tombol" type="submit">Filter</button>
                </form>
                <?php
 error_reporting(0);
// Koneksi ke database
include("koneksi.php");

$kecamatan1 = $_GET['pesan'];
$berhasil = $_GET['berhasil'];
$kecamatan3 = $_GET['kecamatan1'];
if($kecamatan3 != ''){
    $kecamatan1 = $kecamatan3;
}
// Menangkap data filter dari form
if($kecamatan1==''){
    $kecamatan = $_POST['kecamatan'];
}else{
    $kecamatan = $kecamatan1;
}

if ($kecamatan != '') {
    $query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
 AS total_nilai FROM $kecamatan GROUP BY id ORDER BY total_nilai DESC";
$hasil = mysqli_query($conn, $query);
} else {
    
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
 AS total_nilai FROM kecamatan_cilandak GROUP BY id ORDER BY total_nilai DESC";
$hasil = mysqli_query($conn, $query);
}
// Query untuk menampilkan data sesuai filter

?>

                <!-- Tampilkan tabel dengan data yang sudah difilter -->
                <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                    <th colspan="16" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;"><?php 
   
   if ($kecamatan != '') {
    $kecamatan_clean = str_replace("_", " ", $kecamatan);
    echo $kecamatan_clean;
     
   } else{
    if($kecamatan1==''){
        $kecamatan ="kecamatan cilandak";
        $kecamatan_clean = str_replace("_", " ", $kecamatan);
        echo $kecamatan_clean;
    }else{
        
        $kecamatan = $kecamatan1;
        $kecamatan_clean = str_replace("_", " ", $kecamatan);
        echo $kecamatan;
    }
    $kecamatan = "kecamatan_cilandak";
    
    
   } ?></th>
                    <button class="btn-seluruh"><a href="upload.php?kecamatan=<?=$kecamatan?>">
                            Import Data Excel <?php echo $kecamatan_clean; ?></a>
                    </button>

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
                        <th align=" center">Aksi</th>

                    </tr>
                    <?php
            $sql = mysqli_query($conn, $query);
            $no =1;
        if (mysqli_num_rows($sql)) {
        while ($row = mysqli_fetch_array($sql)) {
            $id = $row['id'];
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
                        <td>
                            <a class="btn"
                                href="edit_data_per_kelurahan.php?&id=<?=$id?>&kecamatan=<?=$kecamatan?>">Edit</a>
                    </tr>
                    <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                    <?php

if ($kecamatan != '') {
    $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM $kecamatan";

$total = mysqli_query($conn, $q);
} else {
    
    $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_cilandak";

$total = mysqli_query($conn, $q);
}
                

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
                        <th class="nowarna"></th>
                        <th>TOTAL KASUS KEC</th>
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
                        <th class="nowarna"></th>
                    </tr>
                    <?php } ?>

                </table>

                <script>
                window.addEventListener('load', function() {
                    var select = document.getElementsByName('kecamatan')[0];
                    var selectedValue = localStorage.getItem('selectedValue');
                    if (selectedValue) {
                        for (var i = 0; i < select.options.length; i++) {
                            if (select.options[i].value === selectedValue) {
                                select.options[i].selected = true;
                                break;
                            }
                        }
                    }
                    select.addEventListener('change', function() {
                        localStorage.setItem('selectedValue', select.value);
                    });
                });
                </script>

                <button class="btn-import">
                    <a target="_blank" href="template_excel_import.php?kecamatan_=<?=$kecamatan?>">Download Template
                        Excel <?php echo $kecamatan_clean; ?></a>
                </button>
                <p style="font-size: 12px;"><span style="font-weight: bold"> NOTE : </span><br />*Dikarenakan tiap
                    kecamatan memiliki template berbeda disarankan
                    sebelum download template excel untuk memilih kecamatan pada filter <br />
                    *Disarankan setelah melakukan download template untuk menghindari hal-hal yang tidak diinginkan agar
                    melakukan <b>SAVE AS</b> pada template excel yang telah di download</p>

            </div>
        </article>
    </section>
    <footer>
        <p>Copyright &copy;2023</p>
    </footer>

</body>
<?php
    }?>