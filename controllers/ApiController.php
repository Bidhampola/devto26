<?php

namespace app\controllers;
use app\models\Posts;
use Yii;

class ApiController extends \yii\rest\Controller
{
    //method restrictions
    public function behaviors(): array
    {
        $behaviors = parent::behaviors();
        $behaviors['verbs'] = [
            'class' => \yii\filters\VerbFilter::class,
            'actions' => [
                'index' => ['GET'],
                'test' => ['GET'],
            ],
        ];
        return $behaviors;
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        return ['testing..'];
    }

    //view posts
    public function actionViewPosts()
    {
        $posts = \app\models\Posts::find()->all();
        return $posts;
    }

    //add post
    public function actionAddPost(){
        $model = new Posts();
        $request = \Yii::$app->request;
        Yii::trace($request);
        if ($request->isPost) {
            $model->load($request->post(), '');
            if ($model->validate()) {
                $model->save();
                return ['status' => 'success', 'message' => 'Post added successfully'];
            } else {
                return ['status' => 'error', 'message' => $model->errors];
            }}
    }

}
