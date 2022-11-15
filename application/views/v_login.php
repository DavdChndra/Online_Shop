<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main/app.css">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/png">
    <title>Login</title>
</head>

<body>
    <div class="col-md-8 col-12 d-block mx-auto shadow rounded" style="margin-top:110px;">
        <div class="card">
            <!-- Alert Salah Login -->
            <?php
                if ($this->session->flashdata('error') !='') { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }
            ?>

            <!-- Alert Succsess Register -->
            <?php
            if ($this->session->flashdata('success_register') !='') { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('success_register'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }
            ?>
            <div class="d-flex justify-content-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2170/2170153.png"
                    style="margin-left:90px; margin-right:80px; margin-top:90px; height:200px; width:auto;">
                <div class="isi">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url().'index.php/login/proses'; ?>"
                                method="post">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-10 me-2">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="username" required
                                                        autofocus autocomplete="off">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-10 me-2">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" name="password" required
                                                        autocomplete="off">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-8 offset-md-2 mb-4">
                                            Belum Punya Akun ? <a
                                                href="<?= base_url().'index.php/register'; ?>">Register</a>
                                        </div>
                                        <div class="col-12 col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>