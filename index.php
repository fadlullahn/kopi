<?php
include './config/koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Tanaman Kopi</title>
    <link rel="stylesheet" href="./src/style.css">

    <style>
        .hidden1 {
            display: none;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <?php
    require_once 'components/navbar.php';
    ?>

    <header id="header" class="lg:px-[110px] lg:mt-28">
        <div class="bg-blue-400 text-white font-bold text-2xl text-end">
            <div class="p-2">
                Sistem Informasi Tanaman Kopi
            </div>
        </div>
        <div class="text-start">
            <div class="py-2 font-extrabold text-5xl text-green-400">
                Sistem Informasi Tanaman Kopi
            </div>
            <div class="text-l">
                <b>Rancangan Sistem Informasi Hama Penyakit Tanaman Kopi Berbasis Web di Desa Basseang</b> adalah proyek pengembangan sistem web yang menyediakan platform informasi terintegrasi mengenai hama dan penyakit tanaman kopi. Sistem ini membantu petani kopi dengan menyediakan data terkini tentang identifikasi, pencegahan, dan penanganan hama serta penyakit. Melalui antarmuka web yang user-friendly, petani dapat mengakses informasi, laporan, dan panduan praktis untuk meningkatkan produktivitas dan kesehatan tanaman kopi. Fitur utama mencakup basis data hama dan penyakit, forum diskusi, dan alat pelaporan untuk kolaborasi antara petani dan ahli tanaman.
            </div>
        </div>
        <div class="bg-blue-200 my-3 rounded-md">
            <div class="p-3 text-xl">
                Author : <span class="font-semibold text-green-300 bg-slate-500 rounded-md p-1">Mila</span>
            </div>
        </div>
    </header>

    <main class="flex flex-1 lg:px-[110px]">
        <div class="w-3/4 mt-10 pr-12">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : "";

            if ($page == "") {
                include "home.php";
            } elseif ($page == "") {
                include "";
            }
            ?>
        </div>
        <div class="w-1/3 mt-10">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : "";

            if ($page == "") {
                include "./components/sidebarHome.php";
            } elseif ($page == "") {
                include "";
            }
            ?>
        </div>
    </main>

    <?php
    require_once 'components/footer.php';
    ?>

    <script src="./js/navbar.js"></script>
    <script src="./js//itemActive.js"></script>

</body>

</html>