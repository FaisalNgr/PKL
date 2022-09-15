<?php
// Create database connection using config file
include_once("koneksi.php");
$index = 1;
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tamu ORDER BY id DESC");
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

<body class="bg-gray-100 grid grid-ku ">
    <?php include('template/sidebar.php') ?>
    <!-- ISI CONTENT -->
    <div class="p-10 -ml-3" style="background-color:#0d0c22">
        <a href='tambah.php' class=" bg-blue-500 hover:underline text-white font-bold p-3 rounded">+ Tambah Data</a>


        <!-- Table Penerimaan Pegawai -->
        <div class="overflow-y-auto h-96 mt-6 relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="">
                    <tr class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                        <th scope="col" class="py-3 px-6">
                            No.
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <div class="flex items-center">
                                Asal Instansi
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <div class="flex items-center">
                                Tanggal
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <div class="flex items-center">
                                Status
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <div class="flex items-center">
                                Aksi
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                    </svg></a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user_data = mysqli_fetch_array($result)) {   ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-4 px-6">
                                <?= $index++ ?>
                            </td>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $user_data['nama'] ?>
                            </th>
                            <td class="py-4 px-6">
                                <?= $user_data['asal_instansi'] ?>
                            </td>
                            <td class="py-4 px-6">
                                <?= $user_data['tanggal'] ?>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <span class="
                                <?php
                                if ($user_data['status'] === "Menunggu") {
                                    echo "bg-yellow-300 text-yellow-800";
                                }
                                if ($user_data['status'] === "Diterima") {
                                    echo "bg-green-300 text-green-800";
                                }
                                if ($user_data['status'] === "Ditolak") {
                                    echo "bg-red-300 text-red-800";
                                }
                                ?>bg-yellow-300 text-yellow-800 font-bold p-2 rounded">
                                    <?= $user_data['status'] ?>
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <a href='detail.php?id=<?= $user_data['id'] ?>' class=" bg-blue-500 hover:underline text-white font-bold p-3 rounded">Detail</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
