<?php
include('template/cek_login.php');
?>
<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    echo("uuuu");

    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $_SESSION['nama'] = $_POST['nama'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE user SET nama='$nama',password='$password' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<html>

<head>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="faisal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 grid grid-ku ">
    <div class="shadow-lg p-5 w-72" style="background-color: #12102f;">
        <div class="flex items-center">
            <img src="F.jpg" class="w-16 h-16 rounded-full mr-5">
            <div>
                <p class="font-bold text-2xl text-white"><?= $_SESSION['nama'] ?></p>
                <p class="font-semibold text-white text-xl">Administrator</p>
            </div>
        </div>
        <p class="font-bold text-white mt-5">Menu</p>
        <!-- NAVBAR -->
        <a href="index.php" class="flex items-center mt-3  text-white p-3 rounded hover:bg-gray-700 hover:text-white transition hover:border-green-400 cursor-pointer ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            <p class="font-bold text-xl text-white ml-3">Beranda</p>
        </a>
        <a href="data.php" class="flex items-center mt-3  text-white p-3 rounded hover:bg-gray-700 hover:text-white transition hover:border-green-400 cursor-pointer ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
            </svg>
            <p class="font-bold text-xl text-white ml-3">Data</p>
        </a>
        <a href="pengaturan.php" class="flex items-center mt-3  text-white p-3 rounded bg-gray-700 hover:text-white transition hover:border-green-400 cursor-pointer ">
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
    <div class="p-10 h-screen -ml-3" style="background-color:#0d0c22">

        <p class=" text-white text-2xl mb-4 p-4 font-bold rounded items-center gap-3">Settings</p>
        <div style="background-color: #12102f;" class="p-5 rounded text-white">
            <form method="POST">
                <div class="grid grid-cols-2">
                    <div>
                        <label for="fname">Ganti Password :</label><br>
                        <input type="text" id="password" name="password" placeholder="Masukan Password Baru" class="w-full rounded p-2" style="background-color:#0d0c22" required><br><br>
                        <input name="submit" type="submit" class="bg-blue-600 text-white flex p-4 font-bold rounded items-center gap-3" value="Kirim">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
