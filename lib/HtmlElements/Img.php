<?php

namespace ikki646i\HtmlElements;

class Img extends VoidElement
{
    public function __construct($URL, $alt, $width, $height)
    {
        $this->URL = $URL;
        $this->width = $this->convertValueToWidthOrHeight($width);
        $this->height = $this->convertValueToWidthOrHeight($height);
        $this->alt = $alt;
        parent::__construct("img", ["src" => $this->URL, "alt" => $this->alt, "width" => $this->width, "height" => $this->height]);
    }

    public function convertValueToWidthOrHeight($value)
    {
        if (is_int($value)) {
            return "$value px";
        } elseif (is_string($value)) {
            return $value;
        } else {
            return "auto";
        }
    }

    public function setHeight()
    {
        $this->width = $this->convertValueToWidthOrHeight($width);
    }

    public function setWidth()
    {
        $this->height = $this->convertValueToWidthOrHeight($height);
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}
