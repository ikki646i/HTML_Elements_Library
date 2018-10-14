<?php

namespace Elements\HtmlElements;

class P extends Element
{
    public function __construct($content, $attributes = [], $elementList = [])
    {
        parent::__construct("p", $content, $attributes, $elementList);
    }
}
