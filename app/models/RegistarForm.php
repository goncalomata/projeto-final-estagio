<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

class RegistarForm extends Model {

    public $username;
    public $email;
    public $password;

    public function rules() {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Este nome de utilizador já existe!'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Este endereço de email já se encontra registado!.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Nome de utilizador',
            'auth_key' => 'Chave de autenticação',
            'password_hash' => 'Palavra-passe',
            'password_reset_token' => 'Token de redefinição da palavra-passe',
            'email' => 'Endereço de email',
            'status' => 'Estado',
            'created_at' => 'Data de criação',
            'updated_at' =>  'Data de atualização',
            'verification_token' => 'Token de acesso',
        ];
    }

    public function registar() {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save();
    }

}