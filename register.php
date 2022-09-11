<?php 
 
include 'koneksi.php';
 
session_start();
 
if (isset($_SESSION['nama'])) {
    header("Location: index.php");
}
 
if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($mysqli, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (nama, email, password)
                    VALUES ('$nama', '$email', '$password')";
            $result = mysqli_query($mysqli, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Document</title>
</head>
<body class="bg-gradient-to-r from-purple-900 via-purple-900 to-pink-800 flex items-center h-screen">
    <div class="w-full max-w-sm mx-auto overflow-hidden rounded-lg shadow-md bg-gray-800">
        <div class="px-6 py-4">
            <h2 class="text-3xl font-bold text-center text-gray-700 dark:text-white">Buku Tamu Online</h2>

            <h3 class="mt-1 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Pengadilan Agama Bogor</h3>

            <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Masuk atau Buat Akun</p>

            <form method="POST">
                <div class="w-full mt-4">
                    <input class="block w-full px-4 py-2 mt-2 text-white placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="text" placeholder="Nama Lengkap" aria-label="Email Address" name="nama" required/>
                </div>

                <div class="w-full mt-4">
                    <input class="block w-full px-4 py-2 mt-2 text-white placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="email" placeholder="Email Address" aria-label="Email Address" name="email" required/>
                </div>

                <div class="w-full mt-4">
                    <input class="block w-full px-4 py-2 mt-2 text-white placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="password" placeholder="Password" aria-label="Password" name="password" required />
                </div>

                <div class="w-full mt-4">
                    <input class="block w-full px-4 py-2 mt-2 text-white placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="password" placeholder="Konfirmasi Password" aria-label="Password" name="cpassword" required />
                </div>

                <div class="flex items-center mt-4">
                    <input class="px-4 py-2 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none ml-auto" type="submit" name="login" value="Daftar">
                </div>
            </form>
        </div>

        <div class="flex items-center justify-center py-4 text-center bg-gray-50 dark:bg-gray-700">
            <span class="text-sm text-gray-600 dark:text-gray-200">Sudah Punya Akun ? </span>

            <a href="login.php" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:underline">Masuk</a>
        </div>
    </div>
</body>
</html>
