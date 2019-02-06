<footer class="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-content">
                    <!-- Logo Area Start -->
                    <div class="footer-logo-area text-center">
                        <a href="theme/yummy/index.html" class="yummy-logo">Biniou's blog</a>
                    </div>
                    <!-- Menu Area Start -->
                    <?php
                    $navigation = new \Planck\Theme\Yummy\Component\Navigation();
                    echo $navigation->render();
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>