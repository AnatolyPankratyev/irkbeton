<?php

namespace app\controllers;

use app\models\AppModel;
use project\App;
use project\base\Controller;
use RedBeanPHP\R;

class AppController extends Controller{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
    }

}