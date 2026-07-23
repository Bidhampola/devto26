<?php

namespace app\controllers;
use app\models\Posts;
use Yii;

class Apiv1Controller extends \yii\rest\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest(){
        return ["first api version"];
    }

    //crud

    //view posts
    public function actionViewPosts(){
        $data = Posts::find()->all();
        return $data;
    }

    //add post
    public function actionAddPost(){
        $model = new Posts();
        $request = \Yii::$app->request;
        Yii::trace($request);
        if ($request->isPost) {
            $data = json_decode($request->getRawBody(), true);
            Yii::trace($data);
            //going to save
             $model->title = $data['title'];
             $model->body = $data['body'];

             if($model->save(false)){
                return ['status' => 'success', 'message' => 'Post added successfully'];
                }else{
                return ['status' => 'error', 'message' => 'Failed to add post'];
                }
        }
    }
}
