<div class="col-12 col-md-6">

    <div class="single-post wow fadeInUp" data-wow-delay=".4s">
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
                        <a href="theme/yummy/#">Par <?php echo $article->getAuthor()->getName();?></a>
                    </div>
                    <!-- Post Date -->
                    <div class="post-date">
                        <a href="theme/yummy/#"><?php echo \Planck\Helper\Date::formatDatetime($article->getValue('creation_date'));?></a>
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
        </div>





    </div>
</div>