<?php

namespace app\controllers;

use app\core\Request;
use app\core\Controller;
use app\core\Application;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Test'
        ];

        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body =  $request->getBody();
        var_dump($body);
        return 'Handle submit data';
    }
}