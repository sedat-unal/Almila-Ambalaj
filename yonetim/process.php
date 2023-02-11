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
                            <h3>İşlemler</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Ana Sayfa</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">İşlemler</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <!-- //get url data for page.
                    //for example the url is must process.php?processName= -->

                    <?php
                    $processName = $_GET['processName'];
                    if (empty($processName)) {
                        //return back page
                    } else {
                        switch ($processName) {
                            //detail pages
                            case 'seeSliderDetail':
                                $slider_id = $_GET['slider_id'];
                                if (empty($slider_id)) {
                                    //return back page
                                } else {
                                    $getSliderDataWithID = $dbh->query('select * from slider where slider_id = ' . $slider_id . '');
                                    if ($getSliderDataWithID->rowCount()) {
                                        while ($row = $getSliderDataWithID->fetch()) {
                    ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Slider Detay Gör</h6>
                                                            <p>Bu sayfada istediğiniz slider resmini düzenleyebilirsiniz.</p>
                                                            <hr>
                                                            <br>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="slider-for">
                                                                                <div class="slick-slide-item">
                                                                                    <img src="../images/<?= $row['slider_img'] ?>" class="img-fluid rounded" alt="image">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <?php
                                                                            if (isset($_POST['slider_text'])) {
                                                                                $slider_text = $_POST['slider_text'];
                                                                                $slider_text_en = $_POST['slider_text_en'];
                                                                                $slider_status = $_POST['slider_status'] == 'on' ? 1 : 0;
                                                                                $slider_status_en = $_POST['slider_status_en'] == 'on' ? 1 : 0;

                                                                                $updateQuery = $dbh->prepare('update slider set 
                                                                                                        slider_text = :slider_text,
                                                                                                        slider_text_en = :slider_text_en,
                                                                                                        slider_status = :slider_status,
                                                                                                        slider_status_en = :slider_status_en,
                                                                                                        modify_date = :modify_date
                                                                                                        where slider_id = :slider_id');
                                                                                $data = array(
                                                                                    'slider_text' => $slider_text,
                                                                                    'slider_text_en' => $slider_text_en,
                                                                                    'slider_status' => $slider_status,
                                                                                    'slider_status_en' => $slider_status_en,
                                                                                    'modify_date' => date('d-m-y h:i:s'),
                                                                                    'slider_id' => $slider_id,
                                                                                );

                                                                                if ($updateQuery->execute($data)) {
                                                                                    echo '<div class="alert alert-success" role="alert">
                                                                                            Güncelleme Başarılı! Yönlendiriliyorsunuz..
                                                                                          </div>';
                                                                                    header('Refresh:2');
                                                                                } else {
                                                                                    echo '<div class="alert alert-danger" role="alert">
                                                                                                Fail ! Please contact system admin.
                                                                                            </div>';
                                                                                    header('Refresh:3');
                                                                                }
                                                                            }
                                                                            ?>
                                                                            <form name="sliderUpdateForm" method="POST" action="#">
                                                                                <div class="form-group">
                                                                                    <label for="trTitle">Türkçe Başlık</label>
                                                                                    <input type="text" class="form-control" id="trTitle" value="<?= $row['slider_text'] ?>" name="slider_text">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="enTitle">Ingilizce Başlık</label>
                                                                                    <input type="text" class="form-control" id="enTitle" value="<?= $row['slider_text_en'] ?>" name="slider_text_en">
                                                                                </div>
                                                                                <div class="form-group form-check">
                                                                                    <input type="checkbox" class="form-check-input" id="status" <?= $row['slider_status'] == 1 ? 'checked' : '' ?> name="slider_status">
                                                                                    <label class="form-check-label" for="status">Türkçe Sayfasında Aktif</label>
                                                                                </div>
                                                                                <div class="form-group form-check">
                                                                                    <input type="checkbox" class="form-check-input" id="statusEn" <?= $row['slider_status_en'] == 1 ? 'checked' : '' ?> name="slider_status_en">
                                                                                    <label class="form-check-label" for="statusEn">Ingilizce Sayfasında Aktif</label>
                                                                                </div>
                                                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    <?php
                                        }
                                    }
                                }
                                break;
                            
                            //remove records
                            case 'deleteSlideerWithID':
                                $slider_id = $_GET['slider_id'];
                                if(empty($slider_id)){
                                    //return back
                                    header('Location='.$_SERVER['HTTP_REFERER']);
                                }else{
                                    $deleteQuery = $dbh->prepare('delete from slider where slider_id = ?');
                                    $deleteQuery->bindParam(1, $slider_id, PDO::PARAM_INT);
                                    $deleteQuery->execute();
                                
                                    header('Location='.$_SERVER['HTTP_REFERER']);
                                }
                                break;
                            default:
                                echo 'default';
                                break;
                        }
                    }

                    ?>
                </div>
                <!-- ./ Content -->

                <!-- Footer -->
                <?php include('inc/footer.php'); ?>
                <!-- ./ Footer -->
            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="./vendors/bundle.js"></script>


    <!-- App scripts -->
    <script src="./assets/js/app.min.js"></script>
</body>

</html>