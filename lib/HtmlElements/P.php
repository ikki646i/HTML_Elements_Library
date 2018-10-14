<?php

namespace ikki646i\HtmlElements;

class P extends Element
{
    public function __construct($content, $attributes = [], $elementList = [])
    {
        parent::__construct("p", $content, $attributes, $elementList);
    }
}
