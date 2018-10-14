<?php

namespace ikki646i\HtmlElements;

class Div extends Element
{
    public function __construct($content, $attributes = [], $elementList = [])
    {
        parent::__construct("div", $content, $attributes, $elementList);
    }
}
