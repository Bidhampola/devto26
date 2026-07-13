<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $middle_name
 * @property string|null $username
 * @property string|null $email
 * @property string|null $password
 * @property string|null $image
 * @property string $created_on
 */
class User extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'middle_name', 'username', 'email', 'password', 'image'], 'default', 'value' => null],
            [['first_name', 'last_name', 'middle_name', 'username', 'email', 'password', 'image'], 'string'],
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
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'middle_name' => 'Middle Name',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'image' => 'Image',
            'created_on' => 'Created On',
        ];
    }

}
