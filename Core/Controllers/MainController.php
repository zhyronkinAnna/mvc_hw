<?php
namespace Core\Controllers;

use Core\View;
use Services\Db;

class MainController extends Controller{
    public function home() : void
    {
        $pdo = Db::getInstance();
        $categories = $pdo->query('SELECT * FROM categories'); 
        
        // $content  = $pdo->query('SELECT * FROM articles LEFT JOIN categories ON articles.category_id = categories.id');

        $articles  = $pdo->query('SELECT * FROM articles');

        parent::dump($categories);

        $title = 'Main Page';
        View::render('home', compact('title', 'categories', 'articles'));
    }

    public function contacts(): void
    {
        View::render('main/contacts');
    }
}


