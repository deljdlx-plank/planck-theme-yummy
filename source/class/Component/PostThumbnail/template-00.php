<div class="col-12">
    <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".4s">
        <!-- Post Thumb -->
        <div class="post-thumb">
            <?php
            if($article->hasImage()) {
                echo '<img src="'.$article->getImage()->getValue('url').'"/>';
            }
            ?>
        </div>
        <!-- Post Content -->
        <div class="post-content">
            <div class="post-meta d-flex">
                <div class="post-author-date-area d-flex">
                    <!-- Post Author -->
                    <div class="post-author">
                        <a href="theme/yummy/#">By Marian</a>
                    </div>
                    <!-- Post Date -->
                    <div class="post-date">
                        <a href="<?php echo $article->getValue('url');?>"><?php echo \Planck\Helper\Date::formatDatetime($article->getValue('creation_date'));?></a>
                    </div>
                </div>

                <!-- Post Comment & Share Area -->
                <?php
                $statistique = new \Planck\Theme\Yummy\Component\PostStatistique();
                //echo $statistique->render();
                ?>




            </div>
            <a href="<?php echo $article->getValue('url');?>">
                <h4 class="post-headline"><?php echo $article->getValue('title');?></h4>
            </a>
            <p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <a href="theme/yummy/#" class="read-more">Continue Reading..</a>
        </div>
    </div>
</div>