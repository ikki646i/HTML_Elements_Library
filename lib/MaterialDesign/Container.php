<?php

namespace ikki646i\MaterialDesign;

use \Elements\HtmlElements\Div;

class Container extends Div
{
    public function __construct($content, $elementList = [])
    {
        parent::__construct($content, ["class" => "container"], $elementList);
    }
}
