<!DOCTYPE html>
<html>

<head>
    <?php
    include(__DIR__.'/head.template.php');
    ?>
</head>



<body>
<!--
Header injected here by the main layout
//-->



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
            <div class="col-12 col-sm-8 col-md-6 col-lg-4" id="sidebar">
                <?php

                //include(__DIR__.'/sidebar.template.php');

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

<script id="phi-html-body-end"></script>

</body>

</html>