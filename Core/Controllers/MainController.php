<?php
namespace Core\Controllers;

use Core\View;
use Services\Db;

class MainController extends Controller{
    public function home() : void
    {
        $pdo = Db::getInstance();
        $categories = $pdo->query('SELECT * FROM categories'); 


        $title = 'Main Page';
        View::render('home', compact('title', 'categories'));
    }

    public function contacts(): void
    {
        View::render('main/contacts');
    }
}


