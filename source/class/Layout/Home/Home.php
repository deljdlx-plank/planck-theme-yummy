<?php

namespace Planck\Theme\Yummy\Layout;


use Planck\Model\Dataset;

class Home extends Main
{

    public function __construct()
    {


        parent::__construct();
    }


    public function build()
    {

        parent::build();

        $mainContainer = $this->getMainContainer();


        $mainContainer->html('
                <div class="col-12" id="article-main"></div>
                <div id="article-second" class="row"></div>
                <div id="article-third" class="row"></div>
        
        ', true);



        $articles = $this->getVariable('articles');


        if(!$articles instanceof Dataset) {
            return;
        }

        if(!$articles->length()) {
            return;
        }

        $remainingArticles = $articles->length();
        $currentIndex = 0;
        $article = $articles[0];


        $component = new \Planck\Theme\Yummy\Component\PostThumbnail('big.php');
        $component->setVariable('article', $article);
        $this->registerComponent($component, '#article-main');
        $currentIndex++;


        for($i = 0 ; ($i<4 && $currentIndex<$remainingArticles); $i++) {
            $article = $articles[$currentIndex];
            $currentIndex++;
            $component = new \Planck\Theme\Yummy\Component\PostThumbnail();
            $component->setVariable('article', $article);
            $this->registerComponent($component, '#article-second');
        }



        for($i = 0 ; ($i<4 && $currentIndex<$remainingArticles) ; $i++) {
            $article = $articles[$currentIndex];
            $currentIndex++;
            $component = new \Planck\Theme\Yummy\Component\PostThumbnail('template-00.php');
            $component->setVariable('article', $article);
            $this->registerComponent($component, '#article-third');
        }

    }

}

