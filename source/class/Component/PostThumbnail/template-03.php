<div class="single-post wow fadeInUp" data-wow-delay=".2s">
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
                    <a href="theme/yummy/#"><?php //echo $article['author']['name'];?></a>
                </div>
                <!-- Post Date -->
                <div class="post-date">
                    <a href="theme/yummy/#"><?php echo \Planck\Helper\Date::formatDatetime($article->getValue('creation_date'));?></a>
                </div>
            </div>
            <!-- Post Comment & Share Area -->
            <div class="post-comment-share-area d-flex">
                <!-- Post Favourite -->
                <div class="post-favourite">
                    <a href="theme/yummy/#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                </div>
                <!-- Post Comments -->
                <div class="post-comments">
                    <a href="theme/yummy/#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                </div>
                <!-- Post Share -->
                <div class="post-share">
                    <a href="theme/yummy/#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <a href="<?php echo $article->getValue('url');?>">
            <h2 class="post-headline"><?php echo $article->getValue('title');?></h2>
        </a>
        <?php echo $article->getValue('presentation');?>
        <a href="theme/yummy/#" class="read-more">Continue Reading..</a>
    </div>
</div>