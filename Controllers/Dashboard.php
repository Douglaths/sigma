<?php

class Dashboard extends Controllers
{
    public function dashboard()
    {
        $data['page_tag'] = "Dashboard bro";
        $data['page_title'] = "Sigma";
        $data['page_name'] = "dashboard";
        $data['page_functions_js'] = "";
        $this->views->getView($this, "dashboard", $data);
    }
}