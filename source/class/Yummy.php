<?php

namespace Planck\Theme\Yummy;

use Planck\View\Theme;

class Yummy extends Theme
{


    public function __construct()
    {
        parent::__construct();
    }

    public function getJavascriptURLRoot()
    {
        return 'theme/planck-theme-planck-yummy/asset/javascript';
    }

    public function getCSSURLRoot()
    {
        return 'theme/planck-theme-planck-yummy/asset/css';
    }



}





