<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $body
 * @property int|null $created_by
 * @property string $created_on
 * @property string|null $image
 */
class Posts extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'body', 'created_by', 'image'], 'default', 'value' => null],
            [['title', 'body', 'image'], 'string'],
            [['created_by'], 'default', 'value' => null],
            [['created_by'], 'integer'],
            [['image'],'file', 'extensions' => 'png, jpg, jpeg'],
            [['created_on'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'image' => 'Image',
        ];
    }

}
