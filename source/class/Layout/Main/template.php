<?php
//$article = include('data/content/article/00/descriptor.php');


?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include(__DIR__.'/head.template.php');
    ?>
</head>



<body>

<?php

$header = new \Planck\Theme\Yummy\Component\Header();
echo $header->render();

?>




<!-- ****** Welcome Post Area Start ****** -->
<section class="welcome-post-sliders owl-carousel">
    <!-- Single Slide -->
    <?php
    for($i=0; $i<4; $i++) {
        $component = new \Planck\Theme\Yummy\Component\PostThumbnail('template-02.php');
        //echo $component->render();
    }
    ?>
</section>
<!-- ****** Welcome Area End ****** -->

<!-- ****** Categories Area Start ****** -->
<section class="categories_area clearfix" id="about">
    <div class="container">
        <div class="row">


                <?php
                for($i=0; $i<3; $i++) {
                    echo '<div class="col-12 col-md-6 col-lg-4">';
                    $component = new \Planck\Theme\Yummy\Component\CategoryThumbnail();
                    //echo $component->render();
                echo '</div>';
                }

                ?>

        </div>
    </div>
</section>
<!-- ****** Categories Area End ****** -->

<!-- ****** Blog Area Start ****** -->
<section class="blog_area section_padding_0_80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="row">


                    <!-- Single Post -->
                    <div class="col-12" id="main-container"></div>





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

$footer = new \Planck\Theme\Yummy\Component\Footer();
echo $footer->render();

?>

<!-- ****** Footer Menu Area End ****** -->

<!-- Jquery-2.2.4 js -->
<script src="vendor/jquery/dist/jquery.js"></script>

<!-- Popper js -->
<script src="vendor/tether/dist/js/tether.js"></script>
<script src="vendor/popper.min.js"></script>
<!-- Bootstrap-4 js -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script id="phi-html-body-end"></script>

</body>

</html>