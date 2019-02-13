<?php


namespace Planck\Theme\Yummy\View;


use Planck\Theme\Yummy\Component\ArticleMeta;
use Planck\Theme\Yummy\Component\Tag;
use Planck\View\Component;

class Article extends Component
{

    /**
     * @var \Planck\Extension\Content\Model\Entity\Article
     */
    //protected $article;

    public function render()
    {




        $this->dom
            ->html($this->obInclude(__DIR__.'/template.php', $this->getVariables()), true);



        $tags = $this->article->getTags();

        $collection = $this->dom->find('.article-tags');

        foreach ($tags as $tag) {

            $tagRenderer = new Tag();
            $tagRenderer->setLabel($tag->getValue('name'));


            $url = $this->application->buildRoute('tag', array($tag));

            $tagRenderer->setURL($url);

            $collection->append($tagRenderer->getDom());

        }


        $this->dom->find('.article-title')
            ->html($this->article->getValue('title'));

        $this->dom->find('.article-content')
            ->html($this->article->getValue('html'));

        $this->dom->find('.article-date')
            ->html(
            '<a href="#">'.\Planck\Helper\Date::formatDatetime($this->article->getValue('creation_date')).'</a>'
        );


        if($this->article->hasImage()) {
            $this->dom
                ->find('.article-image')->html(
                '<img src="'.$this->article->getImage()->getValue('url').'"/>'
            );
        }

        $meta = new ArticleMeta();
        $meta->setVariable('article', $this->article);
        $this->dom->find('.post-meta')->html(
            $meta
        );




        return parent::render();
    }


}