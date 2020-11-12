<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user This property is read-only.
 *
 */
class RegisterForm extends Model
{
    public $username;
    public $email;
    public $displayname;
    public $password;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password', 'displayname'], 'required'],
            // password is validated by validatePassword()
            [['email'],'email'],
            'password' => [['password'], 'string', 'min' => 7],
        ];
    }


    public function attributeLabels() {
        return [
            'username' => 'Login',
            'email' => 'E-mail',
            'password' => 'Password',
            'displayname' => 'Name',
        ];
    }

}
