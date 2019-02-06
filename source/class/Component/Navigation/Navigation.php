<?php

namespace Planck\Theme\Yummy\Component;


class Navigation extends \Planck\View\Component
{


    public function __construct($template = null)
    {

        parent::__construct();


        if($template == null) {
            $html = $this->obInclude(__DIR__.'/template-default.php');
        }
        else {
            $html = $this->obInclude(__DIR__.'/'.$template);
        }

        $this->dom->html($html);


    }

}