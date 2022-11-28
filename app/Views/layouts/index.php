<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    use \App\Models\ConfigModel;

    $this->configModel = new ConfigModel();
    $config = $this->configModel->get();
    ?>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="<?= $config['description']; ?>" name="description">
    <meta content="<?= $config['keywords']; ?>" name="keywords">
    <meta content="<?= $config['author']; ?>" name="author">

    <!-- Favicons -->
    <link href="/assets/img/<?= $config['logo']; ?>" rel="icon">
    <link href="/assets/img/<?= $config['logo']; ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- plugins CSS Files -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/plugins/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/plugins/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/plugins/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/plugins/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/plugins/simple-datatables/style.css" rel="stylesheet">
    <link href="/assets/plugins/sweetalert2/sweetalert2.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <div class="flash-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
    <div class="flash-error" data-flashdata="<?= session()->getFlashdata('error'); ?>"></div>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="/assets/img/<?= $config['logo']; ?>" alt="">
                <span class="d-none d-lg-block"><?= $config['appname']; ?></span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Change Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/config">
                    <i class="bi bi-gear"></i>
                    <span>Config</span>
                </a>
            </li>

        </ul>

    </aside>
    <!-- End Sidebar-->

    <!-- #main -->
    <main id="main" class="main">

        <!-- Page Title -->
        <div class="pagetitle card p-4">
            <h1><?= $title; ?></h1>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="card p-4">
                <?= $this->renderSection('content'); ?>
            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer bg-white">
        <div class="copyright">
            <?= $config['copyright']; ?>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?= $this->renderSection('modal'); ?>

    <script src="/assets/plugins/jquery/jquery-3.6.1.min.js"></script>
    <!-- plugins JS Files -->
    <script src="/assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/plugins/chart.js/chart.min.js"></script>
    <script src="/assets/plugins/echarts/echarts.min.js"></script>
    <script src="/assets/plugins/quill/quill.min.js"></script>
    <script src="/assets/plugins/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/plugins/tinymce/tinymce.min.js"></script>
    <script src="/assets/plugins/php-email-form/validate.js"></script>
    <script src="/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/script.js"></script>

    <?= $this->renderSection('script'); ?>

</body>

</html>