<?php
class Logout extends Controllers
{
    public function __construct()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: ' . base_url() . '/login');
        die();
    }

    public function login()
    {
        $data['page_tag'] = "Iniciar Sesión - Sigma";
        $data['page_title'] = "Sigma";
        $data['page_name'] = "login";
        $data['page_functions_js'] = "functions_login.js";
        $this->views->getView($this, "login", $data);
    }
}