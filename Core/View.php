<?php 
namespace Core;

class View{
    public static function render(string $path, array $data = []) : void
    {
        extract($data);
        require_once './templates/header.php';
        require_once "./templates/$path.php";
        require_once './templates/footer.php';
    }
}