<?php

namespace app\controllers;

use app\models\Posts;
use Yii;
use yii\web\UploadedFile;

class PostController extends \yii\web\Controller
{


    public function actionIndex()
    {
        $query = Posts::find()->all();

        return $this->render('index', ['data' => $query]);
    }

    //create post
    public function actionCreate(){

        $model = new Posts();

        if($model->load(Yii::$app->request->post())){

            $img = UploadedFile::getInstance($model, 'image');
            //converting to base64
            $imgbase64 = base64_encode(file_get_contents($img->tempName));

            $model->image = $imgbase64;

            $model->save();

        return $this->redirect(['index']);
        }

        return $this->render('create', ['model' => $model]);
    }

   

}
