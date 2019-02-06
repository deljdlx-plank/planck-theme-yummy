<?php

namespace Planck\Theme\Yummy\Layout;


class Article extends Main
{

    public function __construct()
    {
        parent::__construct();

        $this->addJavascriptFile('vendor/prism/prism.js', static::RESOURCE_PRIORITY_REQUIRE);
        $this->addCSSFile('vendor/prism/prism.css');
    }


    public function build()
    {
        parent::build();

        $mainContainer = $this->getMainContainer();
        $mainContainer->html('
            <div id="article-container"></div>
        ', true);
    }

}

