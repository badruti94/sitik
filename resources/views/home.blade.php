<!DOCTYPE html>
<html lang="en">

<head>

    <title>SiTIK - Landing Page Template</title>
    <!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?= asset('/template_home/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('/template_home/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= asset('/template_home/css/font-awesome.min.css') ?>">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= asset('/template_home/css/templatemo-style.css') ?>">
</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand">SiTIK</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="section-btn"><a href="<?= url('/login') ?>">Sign in / Join</a></li>
                </ul>
            </div>

        </div>
    </section>


    <!-- HOME -->
    <section id="home" data-stellar-background-ratio="0.5">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="home-info">
                        <h1>Selamat Datang di Sistem Informasi TIK</h1>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title">
                            <h2>Let us introduce</h2>
                            <span class="line-bar">...</span>
                        </div>
                        <p style="color:black">Sistem pengajuan ini bertujuan untuk mempermudah dalam memantau dan dokumentasi dalam pengajuan pembuatan baik webisite,email dan sub domain.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-12">
                    <div class="footer-thumb footer-info">
                        <h2>SiTIK-PNC</h2>
                        <p>Sistem Informasi pengajuan website, subdomain dan pembuatan email untuk Dosen dan Karyawan Politeknik Negeri Cilacap.</p>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <div class="footer-thumb">
                        <h2>About Us</h2>
                        <ul class="footer-link">
                            <li>
                                <p>Badru</p>
                            </li>
                            <li>
                                <p>Laely Fitri Is Dahlia</p>
                            </li>
                            <li>
                                <p>Rr.Choirmiant Daybra</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="footer-bottom">
                        <div class="col-md-6 col-sm-7">
                            <div class="phone-contact">
                                <p>Call us <span>(0282) 533-329</span></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square" attr="facebook icon">
                                        <p>politeknik negeri cilacap</p>
                                    </a></li>
                                <li><a href="#" class="fa fa-instagram">
                                        <p>@politeknik.negeri.cilacap</p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- MODAL -->
    <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-popup">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-12 col-sm-12">
                                <div class="modal-title">
                                    <h2>Hydro Co</h2>
                                </div>

                                <!-- NAV TABS -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                    <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                </ul>

                                <!-- TAB PANES -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                        <form action="#" method="post">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                                            <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            <input type="submit" class="form-control" name="submit" value="Submit Button">
                                        </form>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                        <form action="#" method="post">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            <input type="submit" class="form-control" name="submit" value="Submit Button">
                                            <a href="https://www.facebook.com/templatemo">Forgot your password?</a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SCRIPTS -->
    <script src="<?= '/template_home/js/jquery.js' ?>"></script>
    <script src="<?= '/template_home/js/bootstrap.min.js' ?>"></script>
    <script src="<?= '/template_home/js/jquery.stellar.min.js' ?>"></script>
    <script src="<?= '/template_home/js/jquery.magnific-popup.min.js' ?>"></script>
    <script src="<?= '/template_home/js/smoothscroll.js' ?>"></script>
    <script src="<?= '/template_home/js/custom.js' ?>"></script>

</body>

</html>