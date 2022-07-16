<?php

namespace rizdev\Belajar\PHP\MVC\Controller;

use rizdev\Belajar\PHP\MVC\App\View;

class HomeController
{
    public function index()
    {
        $model = [
            'title' => 'Home',
            'content' => 'Hello World! Belajar PHP'
        ];
        // echo "HomeController.index()";

        // require __DIR__ . "/../View/Home/index.php";

        View::render('Home/index', $model);
    }
    public function hello()
    {
        echo "HomeController.hello()";
    }
    public function world()
    {
        echo "HomeController.world()";
    }

    public function about()
    {
        echo "Author : Rizki Darmawan";
    }

    public function login() :void {
        $request = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];


        $response = [
            'message' => 'Login Success',
        ];

        // kirim respon ke view

    }


}