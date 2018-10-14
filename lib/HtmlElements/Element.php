<?php

namespace Elements\HtmlElements;

class Element extends VoidElement
{
    public function __construct($element, $content, $attributes = [], $elementList = [])
    {
        parent::__construct($element, $attributes);
        $this->content = $content;
        $this->stringElementList = $this->elementListToString($elementList);
    }

    public function __toString()
    {
        $openTag = parent::__toString();
        return "$openTag $this->content $this->stringElementList </$this->element>";
    }

    public function elementListToString($elementList)
    {
        $output = "";
        foreach ($elementList as &$value) {
            $output .= "$value \n";
        }
        return $output;
    }
}
