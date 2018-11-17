<?php
namespace Controllers;

class Index extends Controller
{
    public function show()
    {
        $this->view->render("index", [
            "pageTitle" => "Главная страница"
        ]);
    }
}