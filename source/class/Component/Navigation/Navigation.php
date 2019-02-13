<?php

namespace Planck\Theme\Yummy\Component;


use Planck\Navigation\Container;

class Navigation extends \Planck\View\Component
{


    protected $items = [];

    public function __construct($template = null)
    {
        parent::__construct();
        $this->template = __DIR__.'/template.php';
    }

    public function loadFromContainer(Container $container)
    {
        foreach ($container->getItems() as $item) {
            $this->addItem(
                $item->getLabel(),
                $item->getURL()
            );
        }

        return $this;

    }


    public function addItem($label, $url)
    {
        $this->items[] = array(
            'label' => $label,
            'url' => $url
        );
        return $this;
    }



    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }


    public function build()
    {
        parent::build();

        foreach ($this->items as $item) {
            $this->getDom()->find('.navbar-nav')->append(
    '<li class="nav-item">'.
                    '<a class="nav-link" href="'.$item['url'].'">'.
                        $item['label'].
                    '</a>'.
                '</li>'
            );
        }

        return $this;


    }


}