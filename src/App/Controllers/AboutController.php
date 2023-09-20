<?php

namespace App\Controllers;

use App\Config\Paths;
use Framework\TemplateEngine;

class AboutController
{
    public function __construct(private TemplateEngine $view)
    {
    }

    public function about(): void
    {
        echo $this->view->render("about.php", [
            "title" => "About"
        ]);
    }

}