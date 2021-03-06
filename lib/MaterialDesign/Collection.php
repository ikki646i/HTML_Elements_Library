<?php

namespace Elements\MaterialDesign;

use \Elements\HtmlElements\Div;
use \Elements\HtmlElements\Element;
use \Elements\HtmlElements\H4;
use \Elements\HtmlElements\Li;
use \Elements\HtmlElements\Ul;

class Collection
{
    public function __construct($list = [])
    {
        $this->list = $list;
    }

    public function __toString()
    {
        $output = [new Li("", ["class" => "collection-header"], [new H4("Repositories overview")])];
        foreach ($this->list as &$item) {
            $iconElement = new Element("i", "send", ["class" => "material-icons"]);
            $urlElement = new Element("a", "", ["href" => $item["html_url"], "class" => "secondary-content"], [$iconElement]);
            $div = new Div($item["full_name"], [], [$urlElement]);
            $li = new Li("", ["class" => "collection-item"], [$div]);
            array_push($output, $li);
        }
        $ul = new Ul("", ["class" => "collection with-header"], $output);
        $container = new Container("", [$ul]);
        return $container->__toString();
    }
}
