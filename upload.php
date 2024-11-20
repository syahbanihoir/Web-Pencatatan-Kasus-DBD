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
                    <a href="data-per-kelurahan.php">Per Kelurahan</a>&nbsp;/&nbsp;Import Data Excel</a>
                </p>
            </div>

            <div class="card">

                <!-- <h3 style="margin-bottom:25px; font-size: 15px; text-align: 
                center; margin-top: 0;">IMPORT DATA
                    EXCEL</h3> -->
                <button class="btn1 btn-back" id="tombol" type="submit">
                    <a href="data-per-kelurahan.php">Kembali</a>
                </button>
                <br /><br />
                <?php 
include 'koneksi.php';
$kecamatan = $_GET['kecamatan'];
$kecamatan_clean = str_replace("_", " ", $kecamatan);
?>

                <form method="post" enctype="multipart/form-data" action="">
                    <span style="font-size: 14px;">Silahkan import data excel pada </span>
                    <input style="font-weight: bold;" id="kecamatan" type="text" name="kecamatan"
                        value="<?php echo $kecamatan_clean?>" readonly /> <br>
                    <br>
                    Pilih File:
                    <input name="filekecamatan" type="file" required="required">
                    <input class="btn1 btn-back" name="submit" type="submit" value="Import">
                </form>
                <h4>Hanya Mendukung File Yang Bertipe : .xls !!</h4>
            </div>
        </article>
</body>
<?php 
error_reporting(0);
require 'vendor/autoload.php';
    if(isset($_POST['submit'])){
        $err = "";
        $ekstensi = "";
        $succes = "";

        $file_name = $_FILES['filekecamatan']['name'];

        $file_data = $_FILES['filekecamatan']['tmp_name'];

        
        if (empty($file_name)){
            $err .="<li>Silahkan masukan file yang kamu inginkan</li>";
        }else{
            $ekstensi= pathinfo($file_name)['extension'];
        }

        $ekstensi_allowed = array("xls", "xlsx");
        if(!in_array($ekstensi, $ekstensi_allowed)){
            $err .="<li>Silahkan masukkan file tipe xls, atau xlsx. file kamu masukkan
            <b>$file_name<b> punya tipe <b>$ekstensi</b></li>";
        }
        
        
        if(empty($err)){
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
            $spreadsheet = $reader->load($file_data);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            
            
            for($i=5; $i<count($sheetData); $i++){
                $id     = $sheetData[$i]['0'];
                $kelurahan   =  $sheetData[$i]['1'];
                $januari  = $sheetData[$i]['2'];
                $februari  = $sheetData[$i]['3'];
                $maret  = $sheetData[$i]['4'];
                $april  = $sheetData[$i]['5'];
                $mei  = $sheetData[$i]['6'];
                $juni  = $sheetData[$i]['7'];
                $juli  = $sheetData[$i]['8'];
                $agustus  = $sheetData[$i]['9'];
                $september  = $sheetData[$i]['10'];
                $oktober  = $sheetData[$i]['11'];
                $november  = $sheetData[$i]['11'];
                $desember  = $sheetData[$i]['13']; 
                
         
                $exequery =	mysqli_query($conn,"UPDATE $kecamatan SET `jan` = $januari, `feb` = $februari, `maret` = $maret, `april` = $april,
                 `mei` = $mei, `juni` = $juni, `juli` = $juli, `ags` = $agustus, `sept` = $september, `okt` = $oktober, `nov` = $november, `des` = $desember WHERE $kecamatan .`id` = $id;");
    
            }
        }
       
        if ($exequery) {
            $pesan = "data $kecamatan_clean berhasil di import";
            echo "<script>
            alert('$pesan');
            document.location='data-per-kelurahan.php?kecamatan1=$kecamatan';
            </script>";
        } else {
            $pesan = "data $kecamatan_clean gagal di import";
            echo "<script>
            alert('$pesan');
            document.location='data-per-kelurahan.php?kecamatan1=$kecamatan';
            </script>";
        }
    }
?>

</html>