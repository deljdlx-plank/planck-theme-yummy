
<!-- ****** Header Area Start ****** -->
<header class="header_area">
    <div class="container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-12">
                <div class="logo_area text-center">
                    <a href="?" class="yummy-logo">A life full of Binious</a>
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