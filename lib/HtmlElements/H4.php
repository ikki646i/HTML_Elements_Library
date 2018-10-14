<?php

namespace ikki646i\HtmlElements;

class H4 extends Element
{
    public function __construct($content, $attributes = [], $elementList = [])
    {
        parent::__construct("H4", $content, $attributes, $elementList);
    }
}
