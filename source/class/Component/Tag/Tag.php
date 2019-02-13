<?php

namespace Planck\Theme\Yummy\Component;


use Phi\HTML\Element\A;
use Planck\View\Component;

class Tag extends Component
{

    private $label;

    public function __construct($tagName = 'div')
    {
        parent::__construct($tagName);

        $this->link = new A();

        $this->dom->append(
            $this->link
        );
    }


    public function setLabel(string $label)
    {
        $this->label = $label;
        $this->link->html($label);
        return $this;
    }

    public function setURL($url)
    {
        $this->link->setAttribute('href', $url);
        return $this;
    }





}
