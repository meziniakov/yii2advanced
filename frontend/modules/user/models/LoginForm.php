<?php
namespace frontend\modules\user\models;

use Yii;
use yii\base\Model;
use frontend\models\User;

/**
 * Signup form
 */
class LoginForm extends Model
{
    public $username;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            [['username', 'password'], 'required'],
            [['password'], 'validatePassword'],
        ];
    }

    public function login()
    {
        if ($this->validate()) {
            $user = User::findByUsername($this->username);
            return Yii::$app->user->login($user);
        }
        return false;
    }

    public function validatePassword($attribute, $params)
    {
        $user = User::findByUsername($this->username);
        if ($user) {
            if (!$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Неверный пароль');
            }
        }
    }
}
