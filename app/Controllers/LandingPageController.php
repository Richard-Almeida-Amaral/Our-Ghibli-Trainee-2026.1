<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingPageController
{
    public function index()
    {
        $posts = App::get('database')->selectJoinADMP(
            'posts',
            'usuarios',
            0,
            6
        );



        return view('site/landingPage', compact('posts'));
    }
}