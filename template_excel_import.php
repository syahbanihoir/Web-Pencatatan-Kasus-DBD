<?php 
$kecamatan1 = $_GET['kecamatan_'];
echo $kecamatan1;
$kecamatan_clean = str_replace("_", " ", $kecamatan1);
?>

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
    header("Content-Type: application/vnd.ms-excel");       
	header("Content-Disposition: attachment; filename=template_import_data_$kecamatan1.xls");
	?>

    <center>
        <h1>data demam berdarah <?php echo $kecamatan_clean ?></h1>
    </center>

    <p>NOTE : JANGAN MENGUBAH POSISI KOLUM/BARIS PADA TEMPLATE JIKA INGIN DI IMPORT!!!</p>
    <table border="1">
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

        </tr>
        <?php 
		// koneksi database
		include("koneksi.php");
 
		
		
  
    $query = "SELECT * FROM $kecamatan1";

    $sql = mysqli_query($conn, $query);
      
        while ($row = mysqli_fetch_array($sql)) {
            $no = $row['id'];
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
            
            
    ?>
        <tr>
            <td align="center"><?php echo $no ?></td>
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
         

        </tr>
        <?php } ?>
    </table>
     
</body>

</html>