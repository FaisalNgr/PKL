<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

$total_tamu = mysqli_query($mysqli, "SELECT * FROM tamu");
$jumlah_total_tamu = mysqli_num_rows($total_tamu);
$tamu_diterima = mysqli_query($mysqli, "SELECT * FROM tamu WHERE status LIKE '%Diterima%'");
$jumlah_total_diterima = mysqli_num_rows($tamu_diterima);
$tamu_ditolak = mysqli_query($mysqli, "SELECT * FROM tamu WHERE status LIKE '%Ditolak%'");
$jumlah_total_ditolak = mysqli_num_rows($tamu_ditolak);
$tamu_menunggu = mysqli_query($mysqli, "SELECT * FROM tamu WHERE status LIKE '%Menunggu%'");
$jumlah_total_menunggu = mysqli_num_rows($tamu_menunggu);
include('template/cek_login.php');
?>

<html>

<head>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="faisal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="shadow-lg p-5 overflow-hidden fixed h-screen w-72" style="background-color: #12102f;">
        <div class="flex items-center">
            <img src="F.jpg" class="w-16 h-16 rounded-full mr-5">
            <div>
                <p class="font-bold text-2xl text-white"><?= $_SESSION['nama'] ?></p>
                <p class="font-semibold text-white text-xl">Administrator</p>
            </div>
        </div>
        <p class="font-bold text-white mt-5">Menu</p>
        <!-- NAVBAR -->
        <a href="index.php" class="flex items-center mt-3 p-3 rounded cursor-pointer bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            <p class="font-bold text-xl text-white ml-3">Beranda</p>
        </a>
        <a href="data.php" class="flex items-center mt-3  text-white p-3 rounded hover:bg-gray-700 hover:text-white transition hover:border-green-400 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
            </svg>
            <p class="font-bold text-xl text-white ml-3">Data</p>
        </a>
        <a href="pengaturan.php" class="flex items-center mt-3  text-white p-3 rounded hover:bg-gray-700 hover:text-white transition hover:border-green-400 cursor-pointer ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
            </svg>
            <p class="font-bold text-xl text-white ml-2">Settings</p>
        </a>
        <a href="logout.php" class="flex items-center mt-3  text-white p-3 rounded hover:bg-red-400 hover:text-white transition hover:border-red-400 cursor-pointer ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            <p class="font-bold text-xl text-white ml-2">Logout</p>
        </a>
    </div>
    <!-- ISI CONTENT -->
    <div class="p-10 ml-72 h-screen" style="background-color:#0d0c22">
        <div class="mb-5 flex gap-5">
            <div class=" text-white font-bold rounded-lg px-6 py-3 flex items-center shadow-lg " style="background-color: #12102f;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                </svg>
                <div>
                    <p class="text-sm">Total Tamu Keseluruhan</p>
                    <p class="text-3xl -mt-1"><?php echo ($jumlah_total_tamu); ?></p>
                </div>
            </div>
            <div class="bg-green-400 text-white font-bold rounded-lg px-5 py-3 flex items-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-3" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                <div>
                    <p class="text-sm">Total Tamu Diterima</p>
                    <p class="text-3xl -mt-1"><?php echo ($jumlah_total_diterima) ?></p>
                </div>
            </div>
            <div class="bg-red-400 text-white font-bold rounded-lg px-5 py-3 flex items-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
                <div>
                    <p class="text-sm">Total Tamu Ditolak</p>
                    <p class="text-3xl -mt-1"><?= $jumlah_total_ditolak ?></p>
                </div>
            </div>
            <div class="bg-yellow-400 text-white font-bold rounded-lg px-5 py-3 flex items-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
                <div>
                    <p class="text-sm">Total Tamu Menunggu</p>
                    <p class="text-3xl -mt-1"><?= $jumlah_total_menunggu ?></p>
                </div>
            </div>
        </div>
        <div class="flex items-center">
            <img src="logo.png" width="250px">
            <div class="w-full flex flex-col gap-5 px-5">
                <div class="w-full text-white p-5 rounded" style="background-color: #12102f;">
                    <p class="text-2xl font-bold text-center">Visi</p>
                    <p class="text-center">"Terwujudnya Pengadilan Agama Bogor yang Agung".</p>
                </div>
                <div class="w-full text-white p-5 rounded" style="background-color: #12102f;">
                    <p class="text-2xl font-bold text-center">Misi</p>
                    <p>Untuk mewujudkan visi tersebut, Pengadilan Agama Bogor merumuskan misi sebagai berikut:
                        <br>
                        1. Menjaga kemandirian Pengadilan Agama Bogor
                        <br>
                        2. Memberikan pelayanan hukum yang berkeadilan kepada pencari keadilan
                        <br>   
                        3. Meningkatkan kualitas kepemimpinan Pengadilan Agama Bogor
                        <br>
                        4. Meningkatkan kredibilitas dan transparansi Pengadilan Agama Bogor</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-3 mt-5">
            <div class="flex items-center p-3 text-white " style="background-color: #12102f;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 bg-green-400 p-2 rounded">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg>
                <div class="ml-2">
                    <p class="text-xl">No Telepon</p>
                    <p class="text-xl font-bold">0251-8348643</p>
                    <p class="font-semibold"></p>
                </div>
            </div>
            <div class="flex items-center p-3 text-white " style="background-color: #12102f;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 bg-orange-400 p-2 rounded">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg>
                <div class="ml-2">
                    <p class="text-xl">e-mail</p>
                    <p class="text-xl font-bold">pa.bogor@gmail.com</p>
                    <p class="font-semibold"></p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
