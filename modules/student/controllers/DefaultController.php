<?php

namespace app\modules\student\controllers;

use yii\web\Controller;

/**
 * Default controller for the `student` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        // return  "Student module is working";
        // return $this->render('index');
        return $this->redirect(['/post/index']);
    }

}
