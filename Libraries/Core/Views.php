<?php

class Views
{
    public function getView($controller, $view, $data = "")
    {
        $controller = get_class($controller);
        if ($controller == "Home") {
            $view = "Views/" . $view . ".php";
            log($view);
        } else {
            $view = "Views/" . $controller . "/" . $view . ".php";
        }
        require_once $view;
    }
}