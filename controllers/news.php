<?php
namespace Controllers;

class News extends Controller
{
    private $news;

    public function __construct()
    {
        // вызов родительского конструктора
        parent::__construct();
        $this->news = new \Models\News();
    }

    //метод для показа списка новостей
    public function index()
    {
        $list = $this->news->all();
        $data = [
            "news" => $list,
            "pageTitle" => "Список всех новостей"
        ];
        $this->view->render("news/list", $data);
    }

    //метод для показа отдельной новости
    public function show($id)
    {
        $news = $this->news->get($id);
        $this->view->render("news/page", [
            "content" => $news["content"],
            "pageTitle" => $news["title"]
        ]);
    }
}