<!DOCTYPE html>
<html>

<head>
    <title>Export Data Ke Excel</title>
</head>

<body>
    <style type="text/css">
    body {
        font-family: sans-serif;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }
    </style>

    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=data DBD Perkecamatan & Perkelurahan.xls");
	?>

    <center>
        <h1>DATA BERSIH KASUS DEMAM BERDARAH PERKECAMATAN</h1>
    </center>


    <?php
include_once "koneksi.php";
    
    ?>
    <div class="card">
        <div style="overflow-x:auto;">
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                <tr class="k">
                    <th>NO</th>
                    <th>Kecamatan</th>
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
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_cilandak";

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
                <tr>
                    <td align=" center">1</td>
                    <td align=" center">cilandak</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
                    <?php } ?>
                </tr>

                <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_pesanggrahan";

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
                <tr>
                    <td align=" center">2</td>
                    <td align=" center">pesanggrahan</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
                    <?php } ?>

                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_jagakarsa";

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
                <tr>
                    <td align=" center">3</td>
                    <td align=" center">jagakarsa</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
                    <?php } ?>

                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_kebayoran_baru";

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
                <tr>
                    <td align=" center">4</td>
                    <td align=" center">kebayoran baru</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
                    <?php } ?>


                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_kebayoran_lama";

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
                <tr>
                    <td align=" center">5</td>
                    <td align=" center">Kebayoran lama</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
                    <?php } ?>


                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_mampang_prapatan";

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
                <tr>
                    <td align=" center">6</td>
                    <td align=" center">mampang prapatan</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
                    <?php } ?>

                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_pancoran";

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
                <tr>
                    <td align=" center">7</td>
                    <td align=" center">pancoran</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
                    <?php } ?>


                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_pasar_minggu";

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
                <tr>
                    <td align=" center">8</td>
                    <td align=" center">pasar minggu</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
                    <?php } ?>


                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_setia_budi";

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
                <tr>
                    <td align=" center">9</td>
                    <td align=" center">setia budi</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
                    <?php } ?>


                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_tebet";

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
                <tr>
                    <td align=" center">10</td>
                    <td align=" center">tebet</td>
                    <td align=" center"><?php echo $jumlah_jan ?></td>
                    <td align=" center"><?php echo $jumlah_feb ?></td>
                    <td align=" center"><?php echo $jumlah_mar ?></td>
                    <td align=" center"><?php echo $jumlah_apr ?></td>
                    <td align=" center"><?php echo $jumlah_mei ?></td>
                    <td align=" center"><?php echo $jumlah_juni ?></td>
                    <td align=" center"><?php echo $jumlah_juli ?></td>
                    <td align=" center"><?php echo $jumlah_ags ?></td>
                    <td align=" center"><?php echo $jumlah_september ?></td>
                    <td align=" center"><?php echo $jumlah_oktober ?></td>
                    <td align=" center"><?php echo $jumlah_november ?></td>
                    <td align=" center"><?php echo $jumlah_des ?></td>
                    <td align=" center" class="a"><?php echo $jumlah_seluruh ?></td>
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
                    <th class="a"><?php echo $jumlah_seluruh ?></th>
                </tr>
                <?php } ?>
            </table>
            <center>
                <h1>DATA BERSIH KASUS DEMAM BERDARAH PERKELURAHAN</h1>
            </center>


            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan
                    Pesanggrahan</th>
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
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_cilandak GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_pesanggrahan";
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
                </tr>
                <?php } ?>

            </table>

            <br>
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan
                    Jagakarsa</th>
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
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_jagakarsa GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_jagakarsa";
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
                </tr>
                <?php } ?>

            </table>

            <br>
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan
                    Kebayoran Baru</th>
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
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_kebayoran_baru GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_kebayoran_baru";
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
                </tr>
                <?php } ?>

            </table>

            <br>
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan Pasar
                    Minggu</th>
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
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_pasar_minggu GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_pasar_minggu";
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
                </tr>
                <?php } ?>

            </table>

            <br>
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan
                    Kebayoran Lama</th>
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
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_kebayoran_lama GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_kebayoran_lama";
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
                </tr>
                <?php } ?>

            </table>

            <br>
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan Pancoran
                </th>
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
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_pancoran GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_pancoran";
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
                </tr>
                <?php } ?>

            </table>
            <br>
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan Mampang
                    Prapatan</th>
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
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_mampang_prapatan GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_mampang_prapatan";
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
                </tr>
                <?php } ?>

            </table>
            <br>
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan Tebet
                </th>
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
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_tebet GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_tebet";
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
                </tr>
                <?php } ?>

            </table>

            <br>
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan Cilandak
                </th>
                <tr class="k">

                    <th align=" center">NO</th>
                    <th align=" center">Kelurahan</th>
                    <th align=" center">Januari</th>
                    <th align=" center">Februari</th>
                    <th align=" center">Maret</th>
                    <th align=" center">April</th>
                    <th align=" center">Mei</th>
                    <th align=" center">Juni</th>
                    <th align=" center">Juli</th>
                    <th align=" center">Agustus</th>
                    <th align=" center">September</th>
                    <th align=" center">Oktober</th>
                    <th align=" center">November</th>
                    <th align=" center">Desember</th>
                    <th align=" center">Jumlah</th>

                </tr>

                <?php
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_cilandak GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_cilandak";
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
                </tr>
                <?php } ?>

            </table>
            <br>
            <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                </th>

                <th colspan="15" style="margin: 8px 0 4px 12px; text-align: center; font-size: 18px;">Kecamatan Setia
                    Budi</th>
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
$query = "SELECT *,(jan+feb+maret+april+mei+juni+juli+ags+sept+okt+nov+des)
AS total_nilai FROM kecamatan_setia_budi GROUP BY id ORDER BY total_nilai DESC";
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
                    <td align="center" class="a"><?php echo $total ?>


                </tr>
                <?php }}else {
            echo '<tr><td align="center" colspan = "7"><strong>Data  Tidak Ada</strong></td></tr>';
        }  ?>
                <?php

$q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
 AS jumlah_september,SUM(okt) AS jumlah_oktober,
SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_setia_budi";
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
                </tr>
                <?php } ?>

            </table>

</body>

</html>