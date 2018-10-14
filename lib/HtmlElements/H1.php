<?php

namespace ikki646i\HtmlElements;

class H1 extends Element
{
    public function __construct($content, $attributes = [], $elementList = [])
    {
        parent::__construct("H1", $content, $attributes, $elementList);
    }
}
