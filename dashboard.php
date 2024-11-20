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
    <script type="text/javascript" src="chartjs/Chart.js"></script>
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
                    Dashboard</p>
            </div>
            <div class="card">
                <?php
                include("koneksi.php");
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
            }   
                ?>

                <h3 style="font-size: 15px; margin-top: 0; text-align: center;">Total Seluruh
                    Kasus DBD Jakarta Selatan : <?php echo $jumlah_seluruh?></h3>




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
                  $jumlah_seluruh_cilandak = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
                  $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
                   $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
                   $cilandak = $jumlah_seluruh_cilandak;
              }
                ?>

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
                   $jagakarsa = $jumlah_seluruh;
              }
                ?>
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
                   $kebayoran_baru = $jumlah_seluruh;
              }
                ?>

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
                   $kebayoran_lama = $jumlah_seluruh;
              }
                ?>


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
                   $mampang_prapatan = $jumlah_seluruh;
              }
                ?>

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
                   $pancoran = $jumlah_seluruh;
              }
                ?>

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
                   $pasar_minggu = $jumlah_seluruh;
              }
                ?>

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
                   $pesanggrahan = $jumlah_seluruh;
              }
                ?>

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
                   $setia_budi = $jumlah_seluruh;
              }
                ?>

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
                   $tebet = $jumlah_seluruh;
              }
                ?>

                <h5 style="margin-bottom: 5px;  margin-top: 0; text-align: center; font-size:12px;">
                    Grafik Jumlah Kasus DBD Perkecamatan
                    Kota Administrasi Jakarta Selatan
                </h5>

                <div style="background-color: white;">
                    <canvas id="myChart"></canvas>
                </div>
                <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Cilandak", "jagakarsa", "Kebayoran Baru", "Kebayoran Lama",
                            "Mampang Prapatan",
                            "Pancoran", "Pasar Minggu", "Pesanggrahan", "Setia Budi", "tebet"
                        ],
                        datasets: [{
                            label: '',
                            data: [<?php echo $cilandak?>, <?php echo $jagakarsa?>,
                                <?php echo $kebayoran_baru?>, <?php echo $kebayoran_lama?>,
                                <?php echo $mampang_prapatan?>, <?php echo $pancoran?>,
                                <?php echo $pasar_minggu?>, <?php echo $pesanggrahan?>,
                                <?php echo $setia_budi?>, <?php echo $tebet?>
                            ],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(153, 0, 76, 0.2)',
                                'rgba(204, 204, 0, 0.2)',
                                'rgba(0, 204, 0, 0.2)',
                                'rgba(104, 102, 0, 0.2)',
                                'rgba(102, 0, 0, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(102, 0, 101, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(0, 204, 0, 1)',
                                'rgba(255, 206, 86 1)',
                                'rgba(255,99,132, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
                </script>

                <!-- <div id="columnchart_values" style="width: 900px; height: 300px;"></div> -->
            </div>
        </article>
    </section>
    <footer>
        <p>Copyright &copy;2023</p>
    </footer>





</body>
<?php
}?>