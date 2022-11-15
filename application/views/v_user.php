<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.svg" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>TokoFurniture.com</title>
    <style>
    .produk {
        cursor: pointer;
    }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top py-3 px-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/OnlineShop/index.php/user">TokoFurniture.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">TokoFurniture.com</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-black" aria-current="page"
                                href="http://localhost/OnlineShop/index.php/user">
                                <div class="d-flex justify-content-start">
                                    <img src="https://cdn-icons-png.flaticon.com/512/69/69524.png" width="15px"
                                        height="15px" class="my-1 me-2">
                                    Home
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled fw-bold text-black">
                                <div class="d-flex justify-content-start">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" width="15px"
                                        height="15px" class="my-1 me-2">
                                    <?php echo $this->session->userdata('email'); ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-danger"
                                href="<?php echo base_url(); ?>index.php/login/logout">
                                <div class="d-flex justify-content-start">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4400/4400828.png" width="15px"
                                        height="15px" class="my-1 me-2">
                                    Log Out
                                </div>
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <form action="<?php base_url().'index.php/user/search'?>" method="post">
                            <input class="form-control me-2" type="text" placeholder="Cari Produk" aria-label="Search"
                                name="keyword" autocomplete="off">
                            <button class="btn rounded-circle" type="submit" name="search">
                                <img src="https://cdn-icons-png.flaticon.com/512/64/64673.png"
                                    class="card-img-top d-block mx-auto" style="width: 20px; height: 20px;">
                            </button>
                        </form>

                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Display Gambar -->
    <section id="gambar">
        <div id="carouselExampleIndicators" class="carousel slide bg-secondary" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 300px;">
                    <div class="d-flex justify-content-center">
                        <div class="text d-block text-white me-5" style="margin-top: 80px;">
                            <h1 class="text-white">Comfortable Sofa</h1>
                            <p style="max-width: 400px ;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Dolore
                                provident
                                tenetur ipsum earum, quis
                                illum ducimus optio perferendis neque magnam.</p>
                        </div>
                        <img src="https://cdn-icons-png.flaticon.com/512/1698/1698771.png" class="w-auto ms-5"
                            height="300px" alt="...">
                    </div>
                </div>
                <div class="carousel-item" style="height: 300px;">
                    <div class="d-flex justify-content-center">
                        <div class="text d-block text-white me-5" style="margin-top: 80px;">
                            <h1 class="text-white">Minimalist Cupboard</h1>
                            <p style="max-width: 400px ;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Dolore
                                provident
                                tenetur ipsum earum, quis
                                illum ducimus optio perferendis neque magnam.</p>
                        </div>
                        <img src="https://cdn-icons-png.flaticon.com/512/3009/3009903.png" class="w-auto ms-5 mt-5"
                            height="200px" alt="...">
                    </div>
                </div>
                <div class="carousel-item" style="height: 300px;">
                    <div class="d-flex justify-content-center">
                        <div class="text d-block text-white me-5" style="margin-top: 80px;">
                            <h1 class="text-white">Comfortable Bed</h1>
                            <p style="max-width: 400px ;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Dolore
                                provident
                                tenetur ipsum earum, quis
                                illum ducimus optio perferendis neque magnam.</p>
                        </div>
                        <img src="https://cdn-icons-png.flaticon.com/512/2283/2283945.png" class="w-auto ms-5 mt-5"
                            height="200px" alt="...">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="container">
        <!-- Kategori -->
        <section id="kategori">
            <div class="judul pt-5" data-aos="fade-right">
                <h2>Kategori</h2>
                <hr style="width: 80px;">
            </div>
            <div class="row d-flex justify-content-center" data-aos="zoom-in">
                <a href="<?= base_url().'index.php/user/kategori/ChairandSofa'?>"
                    class="col-3 text-decoration-none text-black">
                    <div>
                        <div class="card shadow rounded-4 border border-0">
                            <img src="https://cdn-icons-png.flaticon.com/512/3172/3172746.png"
                                class="card-img-top mt-3 d-block mx-auto" style="width: 100px;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Chair and Sofa</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<?= base_url().'index.php/user/kategori/Cupboard'?>"
                    class="col-3 text-decoration-none text-black">
                    <div>
                        <div class="card shadow rounded-4 border border-0">
                            <img src="https://cdn-icons-png.flaticon.com/512/4782/4782749.png"
                                class="card-img-top mt-3 d-block mx-auto" style="width: 100px;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Cupboard</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<?= base_url().'index.php/user/kategori/Kitchen'?>"
                    class="col-3 text-decoration-none text-black">
                    <div>
                        <div class="card shadow rounded-4 border border-0">
                            <img src="https://cdn-icons-png.flaticon.com/512/1698/1698742.png"
                                class="card-img-top mt-3 d-block mx-auto" style="width: 100px;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Kitchen</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<?= base_url().'index.php/user/kategori/Bedroom'?>"
                    class="col-3 text-decoration-none text-black">
                    <div>
                        <div class="card shadow rounded-4 border border-0">
                            <img src="https://cdn-icons-png.flaticon.com/512/566/566487.png"
                                class="card-img-top mt-3 d-block mx-auto" style="width: 100px;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Bedroom</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Produk -->
        <section id="produk">
            <div class="judul pt-5" data-aos="fade-right">
                <h2>Our Product</h2>
                <hr style="width: 80px; margin-left:5px;">
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                foreach ($data as $u)
                {
                ?>
                <div class="col">
                    <a data-bs-toggle="modal" data-bs-target="#detail<?php echo $u['id']?>"
                        class="produk text-decoration-none text-black">
                        <div class="card h-100 shadow rounded-4 border border-0" data-aos="fade-up">
                            <img src=" <?php echo $u['nama_file']?>" class="card-img-top d-block mx-auto mt-4"
                                style="width: 200px; height:200px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $u['nama_produk']?></h5>
                                <p class="card-text">
                                    <?php echo $u['deskripsi']?>
                                    <br>
                                <h6 class="text-danger">Rp.<?php echo $u['harga']?></h6>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="detail<?php echo $u['id']?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $u['nama_produk']?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-start">
                                        <!-- Gambar dan Harga -->
                                        <div class="GambardanHarga">
                                            <img src="<?php echo $u['nama_file']?>" class="mx-4 mt-5"
                                                style="width: 200px; height:200px;">
                                            <h6 class="ms-3 mt-3 text-danger">Rp.<?= $u['harga']?></h6>
                                        </div>
                                        <!-- DETAIL PRODUK -->
                                        <div class="detailproduk ms-3 mt-4">
                                            <h5 class="mb-4">Detail Produk</h5>
                                            <h6>Nama Produk :</h6>
                                            <p><?php echo $u['nama_produk']?></p>
                                            <h6>Stok Produk : </h6>
                                            <p><?php echo $u ['stok']?></p>
                                            <h6>Kategori Produk : </h6>
                                            <p><?php echo $u ['kategori']?></p>
                                            <h6>Deskripsi Produk : </h6>
                                            <p style="width: 150px;"><?php echo $u ['deskripsi']?></p>
                                        </div>
                                    </div>

                                    <!-- BELI -->
                                    <div class="beliproduk p-3 ps-5 border-start border-4">
                                        <h5 class="mb-3 text-center">Beli</h5>
                                        <form action="<?= base_url().'index.php/user/check_out'?>" method="post">
                                            <h6 class="mb-2">Nama</h6>
                                            <input type="hidden" name="id" value="<?= $u['id']?>">
                                            <input type="text" class="form-control" name="nama"
                                                value="<?php echo $this->session->userdata('nama'); ?>"
                                                autocomplete="off">

                                            <h6 class="mt-2 mb-2">Alamat</h6>
                                            <input type="text" class="form-control" name="alamat" required
                                                autocomplete="off">

                                            <h6 class="mt-2 mb-2">Nomer Telepon</h6>
                                            <input type="text" class="form-control" name="telepon" required
                                                autocomplete="off">

                                            <h6 class="mt-2 mb-2">Jumlah Produk</h6>
                                            <input type="hidden" name="stok_produk" value="<?= $u['stok']?>">
                                            <input type="hidden" name="harga" value="<?= $u['harga']?>">
                                            <input type="number" name="jumlah" class="form-control" id="beli" value="1"
                                                min="0" max="<?php echo $u ['stok']?>" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="SubmitBeli">Beli</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>

        <!-- OUR TEAM -->
        <section id="team" class="mb-4">
            <div class="judul pt-5" data-aos="fade-right">
                <h2>Our Team</h2>
                <hr style="width: 80px;">
            </div>
            <div class="d-flex justify-content-start" data-aos="zoom-in-right">
                <?php
                foreach ($team as $u)
                {
                ?>
                <h6 class="bg-success text-white p-3 rounded-5 me-2 text-center">
                    <?= $u['nama']?> (<?= $u['absen']?>)
                </h6>
                <?php } ?>
            </div>
        </section>
    </div>

    <!-- FOOTER -->
    <div class="container">
        <footer class="py-3 my-4 border-top">
            <span class=" mb-3 mb-md-0 text-muted">© 2022 Kelompok 1</span>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>