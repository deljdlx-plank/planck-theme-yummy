<?php

namespace Planck\Theme\Yummy\Component;




use Planck\Extension\Content\Model\Entity\Article;
use Planck\Model\Exception\DoesNotExist;

class About extends \Planck\View\Component
{


    public function __construct($template = null)
    {

        parent::__construct();

        $html = $this->obInclude(__DIR__.'/template.php');
        $this->dom->html($html, true);


        $article = $this->getApplication()->getModelEntity(Article::class);

        try {
            $article->loadBy('qname', 'presentation');

            $this->dom->find('.about-title')->html($article->getValue('title'));
            $this->dom->find('.about-content')->html($article->getValue('html'));
            $this->dom->find('.about-image')->html(
                '<img src="'.$article->getImage()->getValue('url').'"/>'
            );

        }
        catch(DoesNotExist $exception) {
            //$article->setValue('title', 'El Biniou')
        }



    }


}