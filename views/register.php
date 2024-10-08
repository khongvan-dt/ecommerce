<!DOCTYPE html>
<html lang="zxx">


<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>
    <link rel="icon" href="admin/img/logo.png" type="image/png">

    <link rel="stylesheet" href="admin/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="admin/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="admin/vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="admin/vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="admin/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="admin/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="admin/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="admin/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="admin/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="admin/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="admin/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="admin/vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="admin/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="admin/vendors/morris/morris.css">

    <link rel="stylesheet" href="admin/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="admin/css/metisMenu.css">

    <link rel="stylesheet" href="admin/css/style1.css" />
    <link rel="stylesheet" href="admin/css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header">
                                    <h5 class="modal-title">Register</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="../app/Process/process.php?action=register" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Username" name="username" required autocomplete="username">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="First name" name="firstname" required autocomplete="name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Enter your email" name="email" required autocomplete="email">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Middle Name" name="middlename" autocomplete="additional-name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Last Name" name="lastname" required autocomplete="family-name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
                                        </div>
                                        <div class="mb-3">
                                            <input type="file" class="form-control" name="imageFile" accept="image/*">
                                        </div>
                                        <div class="cs_check_box mb-3">
                                            <input type="checkbox" id="check_box" class="common_checkbox" name="keep_updated">
                                            <label class="form-label" for="check_box">Keep me up to date</label>
                                        </div>
                                        <button type="submit" class="btn_1 full_width text-center">Sign Up</button>
                                        <p>Already have an account? <a data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal" href="admin/#">Log in</a></p>
                                        <div class="text-center">
                                            <a href="admin/#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Forgot Password?</a>
                                        </div>
                                    </form>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="admin/js/jquery1-3.4.1.min.js"></script>

    <script src="admin/js/popper1.min.js"></script>

    <script src="admin/js/bootstrap1.min.js"></script>

    <script src="admin/js/metisMenu.js"></script>

    <script src="admin/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="admin/vendors/chartlist/Chart.min.js"></script>

    <script src="admin/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="admin/vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="admin/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="admin/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="admin/vendors/gijgo/gijgo.min.js"></script>

    <script src="admin/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="admin/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="admin/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="admin/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="admin/vendors/datatable/js/jszip.min.js"></script>
    <script src="admin/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="admin/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="admin/vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="admin/vendors/datatable/js/buttons.print.min.js"></script>
    <script src="admin/js/chart.min.js"></script>

    <script src="admin/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="admin/vendors/tagsinput/tagsinput.js"></script>

    <script src="admin/vendors/text_editor/summernote-bs4.js"></script>
    <script src="admin/vendors/apex_chart/apexcharts.js"></script>

    <script src="admin/js/custom.js"></script>
</body>


</html>