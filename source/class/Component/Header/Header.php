<?php

namespace Planck\Theme\Yummy\Component;




class Header extends \Planck\View\Component
{


    public function __construct()
    {

        parent::__construct();

        $html = $this->obInclude(__DIR__.'/template.php');

        $this->dom->html($html, true);


        /*
        $this->navigation = new \Planck\Theme\Yummy\Component\Navigation();

        $this->dom->find('.navbar-placeholder')
            ->html(
                $this->navigation
            );
        */

    }





}