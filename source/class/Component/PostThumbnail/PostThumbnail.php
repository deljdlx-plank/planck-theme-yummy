<?php

namespace Planck\Theme\Yummy\Component;


class PostThumbnail extends \Planck\View\Component
{


    public function __construct($template = null)
    {
        parent::__construct();
        //$this->template = $template;

        if($template == null) {
            $this->template = __DIR__.'/template-default.php';
        }
        else {
            $this->template = __DIR__.'/'.$template;
        }
    }



}