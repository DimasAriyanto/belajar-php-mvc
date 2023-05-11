<?php

namespace KuliahProgrammer\BelajarPhpMvc\Controller;

use KuliahProgrammer\BelajarPhpMvc\App\View;

class HomeController
{
    public function index(): void
    {
        $model = [
            'title' => 'Belajar PHP MVC',
            'content' => 'Selamat belajar PHP MVC di channel Kuliah Programmer',
        ];

        View::render('Home/index', $model);
    }

    public function hello(): void
    {
        echo "HomeController.hello()";
    }

    public function world(): void
    {
        echo "HomeController.world()";
    }

    public function about(): void
    {
        echo "Author: Dimas Ariyanto";
    }

    public function login(): void
    {
        $request = [
            "username" => $_POST["username"],
            "password" => $_POST["password"],
        ];

        $user = [];

        $response = [
            "message" => "Login sukses",
        ];
    }
}
