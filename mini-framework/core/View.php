<?php


class View
{
  
    public static function render($viewName) {
        require_once(__DIR__ . "/Views/" . $viewName . ".php");
    }
}
