<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;


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
 * @property string|null $role
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{

    public string $passwordHash = '';

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
            [['first_name', 'last_name', 'middle_name', 'username', 'email', 'password', 'image', 'role'], 'default', 'value' => null],
            [['first_name', 'last_name', 'middle_name', 'username', 'email', 'password', 'image', 'role'], 'string'],
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
            'role' => 'Role',
        ];
    }

     public static function findByUsername(string $username): static|null
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId(): int|string
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        // return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        // return $this->authKey === $authKey;
    }

     public static function findIdentity($id): static|null
    {
        return isset(self::$_users[$id]) ? new static(self::$_users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null): static|null
    {
        foreach (self::$_users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }
}
