<?php

namespace Planck\Theme\Yummy\Component;




class SideBar extends \Planck\View\Component
{


    public function __construct($template = null)
    {

        parent::__construct();

        $this->template = __DIR__.'/template.php';

    }




}