<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>womenscoop</title>
    <!--<meta name="AUTHOR" content="Dhanushka Baranasuriya" />-->
    <meta name="COPYRIGHT" content="Copyright (c) 2017 -  ::: Association Of Asia Confederation Credit Union :::" />
    <meta name="KEYWORDS" content="Association, Asia, Confederation, Credit Union" />

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: blue;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 0px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>


</head>
<body>
<?php include_once 'Header2.php';?>


<section class="event-feature sec-padding" data-bg-color="#fafafa">
    <div class="container">
        <div class="col-md-12 pull-left">
              <h3>Board Member Report</h3>
               <br>

                <?php foreach ($techReports as $techReport) {

                        if (count($techReport['data']) > 0) {
                            ?>

                            <div id="name" class="title">
                                <h4><?= $techReport['name'] ?></h4>
                            </div>
                            <hr>
                            <?php foreach ($techReport['data'] as $data) {

                                ?>
                                <div class="single-blog-post">
                                    <div class="content-box" id="tech">
                                        <div class="col-sm-1">
                                            <div class="event-thumb">
                                                <div class="thumb">
                                                    <img class="full-width" src="">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="content">
                                            <a href="<?= base_url() ?>upload_images/about_us_member_documents/<?= $techReport['name'] ?>/<?= $data->doc_file_name ?>">
                                                <h3><span class="report"><?= $data->doc_title ?></span></h3></a>

                                        </div>
                                    </div>
                                </div>

                            <?php
                            }

                        }?>
                    <hr>
                <?php   }?>

        </div>
    </div>
</section>







<!-- main jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?php echo base_url(); ?>assets/js/jquery.bxslider.min.js"></script>
<!-- owl carousel -->
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
<!-- mixit up -->
<script src="<?php echo base_url(); ?>assets/js/jquery.mixitup.min.js"></script>
<!-- fancybox -->
<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
<!-- easing -->
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
<!-- circle progress -->
<script src="<?php echo base_url(); ?>assets/js/circle-progress.js"></script>
<!-- appear js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
<!-- count to -->
<script src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
<!-- gmap helper -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- gmap main script -->
<script src="<?php echo base_url(); ?>assets/js/gmap.js"></script>

<!-- isotope script -->
<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
<!-- jQuery ui js -->
<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.11.4/jquery-ui.js"></script>


<!-- thm custom script -->
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


</body>
</html>