<?php

namespace Elements\HtmlElements;

class Ul extends Element
{
    public function __construct($content, $attributes = [], $elementList = [])
    {
        parent::__construct("ul", $content, $attributes, $elementList);
    }
}
