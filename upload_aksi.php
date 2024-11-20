<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
$kecamatan = $_GET['kecamatan'];
 
?>

<?php
// upload file xls
$target = basename($_FILES['filekecamatan']['name']) ;
move_uploaded_file($_FILES['filekecamatan']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['filekecamatan']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filekecamatan']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

$query1="TRUNCATE TABLE $kecamatan";
 mysqli_query($conn, $query1);
 

 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=6; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$id     = $data->val($i, 1);
	$kelurahan     = $data->val($i, 2);
	$januari   = $data->val($i, 3);
	$februari  = $data->val($i, 4);
    $maret  = $data->val($i, 5);
    $april  = $data->val($i, 6);
    $mei  = $data->val($i, 7);
    $juni  = $data->val($i, 8);
    $juli  = $data->val($i, 9);
    $agustus  = $data->val($i,10);
    $september  = $data->val($i, 11);
    $oktober  = $data->val($i, 12);
    $november  = $data->val($i, 13);
    $desember  = $data->val($i, 14);
		
    $exequery =	mysqli_query($conn,"INSERT INTO $kecamatan (`id`, `kelurahan`, `jan`, `feb`, `maret`, `april`, `mei`, `juni`, `juli`, `ags`, `sept`, `okt`, `nov`, `des`) 
        VALUES ('$id', '$kelurahan', '$januari', '$februari', '$maret', '$april', '$mei', 
		'$juni', '$juli', '$agustus', '$september', '$oktober', '$november', '$desember')");
		$berhasil++;

}
 
if ($exequery) {
    $pesan = "$berhasil data berhasil di import";
    echo "<script>
    alert('$pesan');
    document.location='data-per-kelurahan.php?kecamatan1=$kecamatan';
    </script>";
} else {
    $pesan = "data gagal di import";
    echo "<script>
    alert('$pesan');
    document.location='data-per-kelurahan.php?kecamatan1=$kecamatan';
    </script>";
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filekecamatan']['name']);
 

?>