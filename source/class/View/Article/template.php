

<!-- Post Thumb -->

<h1>
    <?php echo $article->getValue('title');?>
</h1>

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
                <a href="#">Par <?php echo $article->getAuthor()->getName();?></a>
            </div>
            <!-- Post Date -->
            <div class="post-date">
                <a href="#"><?php echo \Planck\Helper\Date::formatDatetime($article->getValue('creation_date'));?></a>
            </div>
        </div>
    </div>


    <div>
        <?php
            echo $article->getValue('html');
        ?>
    </div>



</div>


