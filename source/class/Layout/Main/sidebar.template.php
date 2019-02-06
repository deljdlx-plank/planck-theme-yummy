<div class="blog-sidebar mt-5 mt-lg-0">
    <!-- Single Widget Area -->
    <?php
    $component = new \Planck\Theme\Yummy\Component\About();
    echo $component->render();
    ?>

    <!-- Single Widget Area -->
    <?php
    $component = new \Planck\Theme\Yummy\Component\Follow();
    //echo $component->render();
    ?>

    <!-- Single Widget Area -->
    <div class="single-widget-area popular-post-widget">
        <div class="widget-title text-center">
            <h6>Populer Post</h6>
        </div>
        <!-- Single Popular Post -->

        <?php
        for($i=0; $i<4; $i++) {
            $component = new \Planck\Theme\Yummy\Component\PostThumbnail('template-01.php');
            echo $component->render();
        }
        ?>
    </div>

</div>