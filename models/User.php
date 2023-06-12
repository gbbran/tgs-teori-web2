<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $user name
 * @property string $password
 * @property string $nama
 * @property string $image
 * @property string $tgl-lahir
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user name', 'password', 'name', 'image', 'tgl_lahir'], 'required'],
            [['user name', 'password'], 'string', 'max' => 6],
            [['name'], 'string', 'max' => 36],
            [['image', 'tgl_lahir'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user name' => 'Userame',
            'password' => 'Password',
            'name' => 'Nama',
            'image' => 'Image',
            'tgl_lahir' => 'Tgl Lahir',
        ];
    }
}
