<?php

namespace Planck\Theme\Yummy\Component;




class Footer extends \Planck\View\Component
{


    public function __construct($template = null)
    {

        parent::__construct();

        $html = $this->obInclude(__DIR__.'/template.php');

        $this->dom->html($html);

    }





}