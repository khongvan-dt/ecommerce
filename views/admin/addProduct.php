<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from finance-html/apex_chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2024 14:32:57 GMT -->

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Finance</title>
  <link rel="icon" href="img/logo.png" type="image/png" />

  <link rel="stylesheet" href="css/bootstrap1.min.css" />

  <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

  <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />

  <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

  <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

  <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

  <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

  <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
  <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

  <link
    rel="stylesheet"
    href="vendors/datatable/css/jquery.dataTables.min.css" />
  <link
    rel="stylesheet"
    href="vendors/datatable/css/responsive.dataTables.min.css" />
  <link
    rel="stylesheet"
    href="vendors/datatable/css/buttons.dataTables.min.css" />

  <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

  <link rel="stylesheet" href="vendors/morris/morris.css" />

  <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

  <link rel="stylesheet" href="css/metisMenu.css" />

  <link rel="stylesheet" href="css/style1.css" />
  <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS" />
  <link type="text/css" rel="stylesheet" href="css/add.css" />

</head>

<body class="crm_body_bg">
  <?php
  include('sidebar.php');
  ?>

  <section class="main_content dashboard_part">
    <?php
    include('header.php');
    ?>
    <form class="jotform-form" method="post" name="form_242808455550459">
      <div role="main" class="form-all">
        <ul class="form-section page-section">
          <li id="cid_1" class="form-input-wide" data-type="control_head">
            <div class="form-header-group  header-small">
              <div class="header-text httac htvam">
                <h3 id="header_1" class="form-header" data-component="header">New Product</h3>
              </div>
            </div>
          </li>
          <li class="form-line form-line-column form-col-1 jf-required">
            <label class="form-label form-label-top"> Category
              <span class="form-required">*</span>
            </label>
            <div id="cid_3" class="form-input-wide jf-required" data-layout="half"> <select class="form-dropdown validate[required]" id="input_3" name="q3_gender" style="width:310px" data-component="dropdown" required="" aria-label="Category">
                <option value="">Please Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="N/A">N/A</option>
              </select> </div>
          </li>
          <li class="form-line">
            <div>
              <label class="form-label form-label-top form-label-auto">
                Name product <span class="form-required">*</span> </label>
              <input type="text" class="form-textbox form-address-line" style="min-height:13px">

            </div>
            <div>
              <label class="form-label form-label-top form-label-auto">
                Img Product <span class="form-required">*</span>
              </label>

              <input type="text" class="form-textbox form-address-line" style="min-height:13px">
            </div>
          </li>

          <li class="form-line">
            <div>
              <label class="form-label form-label-top form-label-auto">
                Price in </label>
              <input type="text" class="form-textbox form-address-line" style="min-height:13px">
            </div>
            <div>
              <label class="form-label form-label-top form-label-auto">
                Price out </label>
              <input type="text" class="form-textbox form-address-line" style="min-height:13px">
            </div>
          </li>


          <li class="form-line" data-type="control_textarea" id="id_45"><label class="form-label form-label-top form-label-auto" id="label_45" for="input_45" aria-hidden="false"> Describe </label>
            <div id="cid_45" class="form-input-wide"> <textarea id="input_45" class="form-textarea" name="q45_clickTo45" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_45"></textarea> </div>
          </li>
          <li class="form-line" data-type="control_button" id="id_52">
            <div id="cid_52" class="form-input-wide">
              <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                <button type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField">Submit</button>
              </div>
            </div>
          </li>
        </ul>
      </div>

    </form>

    <?php
    include('footer.php');
    ?>
  </section>

  <script src="js/jquery1-3.4.1.min.js"></script>

  <script src="js/popper1.min.js"></script>

  <script src="js/bootstrap1.min.js"></script>

  <script src="js/metisMenu.js"></script>

  <script src="vendors/count_up/jquery.waypoints.min.js"></script>

  <script src="vendors/chartlist/Chart.min.js"></script>

  <script src="vendors/count_up/jquery.counterup.min.js"></script>

  <script src="vendors/swiper_slider/js/swiper.min.js"></script>

  <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

  <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

  <script src="vendors/gijgo/gijgo.min.js"></script>

  <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
  <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
  <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
  <script src="vendors/datatable/js/buttons.flash.min.js"></script>
  <script src="vendors/datatable/js/jszip.min.js"></script>
  <script src="vendors/datatable/js/pdfmake.min.js"></script>
  <script src="vendors/datatable/js/vfs_fonts.js"></script>
  <script src="vendors/datatable/js/buttons.html5.min.js"></script>
  <script src="vendors/datatable/js/buttons.print.min.js"></script>
  <script src="js/chart.min.js"></script>

  <script src="vendors/progressbar/jquery.barfiller.js"></script>

  <script src="vendors/tagsinput/tagsinput.js"></script>

  <script src="vendors/text_editor/summernote-bs4.js"></script>
  <script src="vendors/apex_chart/apexcharts.js"></script>

  <script src="js/custom.js"></script>

  <script src="vendors/apex_chart/apexchart_lists.js"></script>
</body>

</html>