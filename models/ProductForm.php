<?php

namespace app\models;

use yii\base\Model;

class ProductForm extends Model
{
    public $name;
    public $email;
    public $price;
    public $details;

    public function rules()
    {
        return [
            [['name', 'email', 'price', 'details'], 'required'],
            ['email', 'email'],
        ];
    }
}
