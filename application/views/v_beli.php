<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/main/app.css">

    <!-- Untuk Logo di title -->
    <link rel="shortcut icon" href="../assets/images/logo/favicon.svg" type="image/x-icon">

    <!-- CSS animasi -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Nama title di web -->
    <title>Login</title>
</head>

<body>
    <div class="col-md-5 col-12 d-block mx-auto shadow rounded" style="margin-top:40px;" data-aos="zoom-in">
        <!-- data-aos="zoom-in" (berfungsi untuk animasi js) -->
        <div class="card">
            <div class="isi">
                <!-- Untuk Nama -->
                <div class="card-header text-center">
                    <h3>Struk Pembelian</h3>
                </div>
                <div class="card-content d-flex justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/1052/1052856.png"
                        style="width: 200px; height:200px; margin-top:75px;" class="mx-5">
                    <!-- Berfungsi untuk menampilkan isi tabel di database -->
                    <?php
                        foreach ($beli as $u){ // berfungsi untuk melakukan pengulangan data dan mengganti variabel "beli" menjadi "u"
                        ?>
                    <div class="card-body">
                        <h5>Nama</h5>
                        <p><?= $u['nama'] // nama kolom di tabel beli ?></p>
                        <h5>Alamat</h5>
                        <p><?= $u['alamat']?></p>
                        <h5>Nomer Telepon</h5>
                        <p><?= $u['telepon']?></p>
                        <h5>Jumlah produk</h5>
                        <p><?= $u['jumlah']?></p>
                        <h5>Total Harga</h5>
                        <p><?= $u['total_harga']?></p>
                    </div>
                    <?php } ?>
                </div>

                <!-- Berfungsi untuk kembali ke halaman user -->
                <a href="<?=base_url()."index.php/user"?>" class="btn btn-primary d-block mx-auto">Home</a>
            </div>
        </div>
    </div>
    </div>

    <!-- Berfungsi untuk js -->
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/app.js"></script>

    <!-- Berfungsi untuk js animasi -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>