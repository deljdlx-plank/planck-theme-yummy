<!DOCTYPE html>
<html>

<head>
    <?php

    include(__DIR__.'/head.template.php');


    ?>
</head>



<body>

<div id="preloader">
    <div class="yummy-load"></div>
</div>






<!-- ****** Header Area Start ****** -->
<header class="header_area">
    <div class="container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-12">
                <div class="logo_area text-center">
                    <a href="theme/yummy/index.html" class="yummy-logo">A life full of Binious</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">


                <?php
                $navigation = new \Planck\Theme\Yummy\Component\Navigation('template-head.php');
                echo $navigation->render();
                ?>
            </div>
        </div>
    </div>
</header>
<!-- ****** Header Area End ****** -->













<!-- ****** Breadcumb Area Start ****** -->
<div class="breadcumb-area" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumb-title text-center">
                    <h2><?php echo $article->getValue('title');?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breadcumb-nav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Archive</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Single Post Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ****** Breadcumb Area End ****** -->












<!-- ****** Blog Area Start ****** -->
<section class="blog_area section_padding_0_80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="row">

                    <!-- Single Post -->
                    <div class="col-12">
                        <?php
                            include(__DIR__.'/article-mock.template.php');
                        ?>
                    </div>

                    <!-- Single Post -->

                </div>
            </div>




            <!-- ****** Blog Sidebar ****** -->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <?php

                include(__DIR__.'/sidebar.template.php');

                ?>
            </div>
        </div>
    </div>
</section>
<!-- ****** Blog Area End ****** -->

<!-- ****** Instagram Area Start ****** -->
<?php

//include (__DIR__.'/instagram.template.php');

?>
<!-- ****** Our Creative Portfolio Area End ****** -->

<!-- ****** Footer Social Icon Area Start ****** -->
<?php
$socialLink = new \Planck\Theme\Yummy\Component\SocialLink();
//echo $socialLink->render();
?>
<!-- ****** Footer Social Icon Area End ****** -->

<!-- ****** Footer Menu Area Start ****** -->
<?php

include(__DIR__.'/footer.template.php');

?>

<!-- ****** Footer Menu Area End ****** -->

<!-- Jquery-2.2.4 js -->
<script src="theme/yummy/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="theme/yummy/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap-4 js -->
<script src="theme/yummy/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins JS -->
<script src="theme/yummy/js/others/plugins.js"></script>
<!-- Active JS -->
<script src="theme/yummy/js/active.js"></script>

<script id="phi-html-body-end"></script>


</body>

</html>