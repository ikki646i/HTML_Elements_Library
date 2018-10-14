<?php

namespace ikki646i\HtmlElements;

class Li extends Element
{
    public function __construct($content, $attributes = [], $elementList = [])
    {
        parent::__construct("Li", $content, $attributes, $elementList);
    }
}
