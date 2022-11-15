<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/560/560277.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    .produk {
        cursor: pointer;
    }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/OnlineShop/index.php/admin">TokoFurniture.com/Admin</a>
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
                            <a class="nav-link fw-bold text-black btn" aria-current="page" data-bs-toggle="modal"
                                data-bs-target="#InputProduk">Input Produk</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <form action="" method="post">
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search"
                                name="keyword">
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

    <div class="container" style="margin-top: 50px;">
        <!-- INPUT PRODUK -->
        <section id="inputproduk">
            <!-- Modal -->
            <div class="modal fade" id="InputProduk" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h3 class="mb-4">Input Produk</h3>
                            <form action="<?= base_url().'index.php/user/input'?>" method="post"
                                enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Produk"
                                        name="nama_produk">
                                    <label for="floatingInput">Nama Produk</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingStok" placeholder="Stok"
                                        name="stok">
                                    <label for="floatingStok">Stok</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectGrid" name="kategori">
                                        <option selected disabled>Pilih kategori sesuai produk</option>
                                        <option value="ChairandSofa">ChairandSofa</option>
                                        <option value="Cupboard">Cupboard</option>
                                        <option value="Kitchen">Kitchen</option>
                                        <option value="Bedroom">Bedroom</option>
                                    </select>
                                    <label for="floatingSelectGrid">Katogori Produk</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea cols="30" rows="10" class="form-control" id="floatingDeskripsi"
                                        placeholder="Deskripsi" name="deskripsi" style="height: 150px;"></textarea>
                                    <label for="floatingDeskripsi">Deskripsi</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Harga Produk" name="harga">
                                    <label for="floatingInput">Harga Produk</label>
                                </div>
                                <div class="mt-3 mb-4">
                                    <input class="form-control" type="file" id="formFile" name="images">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" value="Submit" name="SubmitProduk"
                                class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- TAMPILAN PRODUK -->
        <section id="TampilanProduk">
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                <!-- Perulangan data -->
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
                                <!-- EDIT PRODUK -->
                                <button type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#edit<?= $u['id']?>">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" height="30px">
                                </button>
                                <button type="button" class="btn">
                                    <!-- HAPUS PRODUK -->
                                    <a href="<?= base_url().'index.php/user/delete/'.$u['id']?>">
                                        <img src="https://cdn-icons-png.flaticon.com/512/4442/4442016.png"
                                            height="30px">
                                    </a>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Modal DETAIL PRODUK -->
                <div class="modal fade" id="detail<?php echo $u['id']?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
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
                                            <h6 class="ms-3 mt-3 ">Harga</h6>
                                            <h6 class="ms-3 my-3 text-danger">Rp.<?= $u['harga']?></h6>
                                        </div>
                                        <!-- DETAIL PRODUK -->
                                        <div class="detailproduk ms-3 mt-2">
                                            <h5 class="mb-4">Detail Produk</h5>
                                            <h6>Nama Produk :</h6>
                                            <p><?php echo $u['nama_produk']?></p>
                                            <h6>Stok Produk : </h6>
                                            <p><?php echo $u ['stok']?></p>
                                            <h6>Kategori Produk : </h6>
                                            <p><?php echo $u ['kategori']?></p>
                                            <h6>Deskripsi Produk : </h6>
                                            <p><?php echo $u ['deskripsi']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal EDIT PRODUK -->
                <div class="modal fade" id="edit<?= $u ['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $u ['nama_produk']?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url().'index.php/user/update'?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="form-floating mb-3">
                                        <input type="hidden" name="id" value="<?php echo $u['id']; ?>">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Nama Produk" name="nama_produk"
                                            value="<?= $u ['nama_produk'] ?>">
                                        <label for="floatingInput">Nama Produk</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingStok" placeholder="Stok"
                                            name="stok" value="<?= $u ['stok'] ?>">
                                        <label for="floatingStok">Stok</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelectGrid" name="kategori">
                                            <option value="<?= $u ['kategori'] ?>" selected><?= $u ['kategori'] ?>
                                            </option>
                                            <option value="ChairandSofa">ChairandSofa</option>
                                            <option value="Cupboard">Cupboard</option>
                                            <option value="Kitchen">Kitchen</option>
                                            <option value="Bedroom">Bedroom</option>
                                        </select>
                                        <label for="floatingSelectGrid">Katogori Produk</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea cols="30" rows="10" class="form-control" id="floatingDeskripsi"
                                            placeholder="Deskripsi" name="deskripsi"
                                            style="height: 150px;"><?= $u ['deskripsi'] ?></textarea>
                                        <label for="floatingDeskripsi">Deskripsi</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Harga Produk" name="harga" value="<?= $u ['harga'] ?>">
                                        <label for="floatingInput">Harga Produk</label>
                                    </div>
                                    <div class="mt-3 mb-4">
                                        <img src=" <?php echo $u ['nama_file']?>"
                                            class="card-img-top d-block mx-auto mt-4"
                                            style="width: 200px; height:200px;">
                                        <input class="form-control mt-3" type="file" id="formFile" name="images">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="SubmitProduk" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
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