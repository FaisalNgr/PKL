<?php
// Create database connection using config file
include_once("koneksi.php");
$index = 1;

// Fetch all users data from database
include('template/cek_login.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data</title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="faisal.css">

</head>

<!-- HEADER -->

<body onload="window.print()">
    <img src="logo.png" style="float:left; height:120px" alt="">
    <div style="text-align:center ;">
        <div style="font-size: 35px;"> <b>PENGADILAN AGAMA BOGOR</b> </div>
        <div style="font-size: 17px;">JLN K.H. ABDULLAH BIN NUH, KOTA BOGOR, 1616</div>
        <div style="font-size: 17px;">TELEPON (0251) 8348643, FAKSIMILE (0251) 8348649</div>
        <div style="font-size: 17px;">SITUS <u>www.pa-bogor.go.id</u>, E-MAIL: <u>pa.bogor@gmail.com</u>
        </div>
    </div>

    <hr style="border: 0.5px solid black; margin: 18px 5px 18px 5px;">

    <center>
        <font size="5"><b>DATA TAMU</b></font><br>
    </center>

    <!-- Tabel -->
    <div class=" h-96 mt-6 relative shadow-md sm:rounded-lg">
        <table class="w-full relative text-sm text-left text-black">
            <thead class="">
                <tr class="text-xs uppercase sticky">
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            No.
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Nama
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Asal Instansi
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Tanggal
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-8">
                        <div class="flex items-center">
                            Status
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $result = mysqli_query($mysqli, "SELECT * FROM tamu where tanggal LIKE '%cari%'");
                } else {
                    $result = mysqli_query($mysqli, "SELECT * FROM tamu ORDER BY id DESC");
                }
                while ($user_data = mysqli_fetch_array($result)) {   ?>
                    <tr class="bg-white border-b ">
                        <td class="py-4 px-6">
                            <?= $index++ ?>
                        </td>
                        <th scope="row" class="py-4 px-6 font-medium  whitespace-nowrap ">
                            <?= $user_data['nama'] ?>
                        </th>
                        <td class="py-4 px-6">
                            <?= $user_data['asal_instansi'] ?>
                        </td>
                        <td class="py-4 px-6">
                            <?= $user_data['tanggal'] ?>
                        </td>
                        <td class="py-4 px-6 text-center items-center">
                            <span class="
                                <?php
                                if ($user_data['status'] === "Menunggu") {
                                    echo "";
                                }
                                if ($user_data['status'] === "Diterima") {
                                    echo "";
                                }
                                if ($user_data['status'] === "Ditolak") {
                                    echo "";
                                }
                                ?>  p-2 rounded">
                                <?= $user_data['status'] ?>
                            </span>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
