<?php
class HomeController
{
    public function index()
    {
        include __DIR__ . '/../Views/Home/index.php';
    }
    public function create()
    {
        echo "U in method Create of UserController Controler";
    }
}
