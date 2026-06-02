<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ControllerLandingPage
{

    public function landingPage()
    {
        return view('site/landing-page');
    }

}
