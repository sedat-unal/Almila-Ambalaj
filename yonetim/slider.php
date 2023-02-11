<?php include('./inc/header.php'); ?>

<body class="dark scrollable-layout">
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
        <span>Loading...</span>
    </div>
    <!-- ./ Preloader -->

    <!-- Sidebar group -->
    <div class="sidebar-group">
        <!-- BEGIN: Settings -->
        <?php include('inc/sidebar.php'); ?>
        <!-- END: Settings -->
    </div>
    <!-- ./ Sidebar group -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper">

        <!-- Header -->
        <?php include('inc/top_bar.php'); ?>
        <!-- ./ Header -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- begin::navigation -->
            <?php include('inc/menu.php'); ?>
            <!-- end::navigation -->

            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content ">

                    <div class="page-header">
                        <div>
                            <h3>Slider Ayarları</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Slider Ayarları</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Aktif Slider Görüntüleri</h6>
                                    <div class="slick-autoplay">
                                        <?php
                                        $getCount = $dbh->query('select count(*) from slider where slider_status = 1 or slider_status_en = 1');
                                        if ($getCount->rowCount() >= 1) {
                                            $getSliderData = $dbh->query('select * from slider where slider_status = 1 or slider_status_en = 1');
                                            while ($sliderRow = $getSliderData->fetch()) {
                                                echo '<div class="slick-slide-item">
                                                        <img src="../images/' . $sliderRow['slider_img'] . '" class="img-fluid" alt="image" width="400">
                                                    </div>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Slider Listesi</h6>
                                    <div class="table-responsive">
                                        <table id="orders" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Slider</th>
                                                    <th>Başlık</th>
                                                    <th>İngilizce Başlık</th>
                                                    <th>TR Durum</th>
                                                    <th>Oluşturulma Tarihi</th>
                                                    <th>Değişim Tarihi</th>
                                                    <th class="text-right">Islem</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $getSliderData = $dbh->query('select * from slider where slider_status = 1 or slider_status_en = 1');
                                                while ($sliderRow = $getSliderData->fetch()) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <a href="#"><?= $sliderRow['slider_id'] ?></a>
                                                        </td>
                                                        <td>
                                                            <img width="40" src="../images/<?= $sliderRow['slider_img'] ?>" class="rounded mr-3">
                                                        </td>
                                                        <td><?= $sliderRow['slider_text'] == '' ? '-' : $sliderRow['slider_text']?></td>
                                                        <td><?= $sliderRow['slider_text_en'] == '' ? '-' : $sliderRow['slider_text_en']?></td>
                                                        <td>
                                                            <span class="<?= $sliderRow['slider_status'] == 1 ? 'badge bg-success-bright text-success' : 'badge bg-danger-bright text-danger' ?>">
                                                                <?= $sliderRow['slider_status'] == 1 ? 'Aktif' : 'Pasif' ?>
                                                            </span>
                                                        </td>
                                                        <td><?= $sliderRow['created_at'] ?></td>
                                                        <td><?= $sliderRow['modify_date'] ?></td>
                                                        <td class="text-right">
                                                            <div class="dropdown">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="ti-more-alt"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="process.php?processName=seeSliderDetail&slider_id=<?= $sliderRow['slider_id'] ?>" class="dropdown-item">Detay Gör</a>
                                                                    <a class="dropdown-item" href="../images/<?= $sliderRow['slider_img'] ?>" download>İndir</a>
                                                                    <a href="process.php?processName=deleteSliderWithID&slider_id=<?= $sliderRow['slider_id'] ?>" class="dropdown-item text-danger">Sil</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ./ Content -->

                <!-- Footer -->
                <footer class="content-footer">
                    <div>© 2020 Gogi - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                    <div>
                        <nav class="nav">
                            <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                            <a href="#" class="nav-link">Change Log</a>
                            <a href="#" class="nav-link">Get Help</a>
                        </nav>
                    </div>
                </footer>
                <!-- ./ Footer -->
            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="./vendors/bundle.js"></script>

    <!-- Slick slide -->
    <script src="./vendors/slick/slick.min.js"></script>
    <script src="./assets/js/examples/slick.js"></script>

    <!-- App scripts -->
    <script src="./assets/js/app.min.js"></script>
</body>

</html>