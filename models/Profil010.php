<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_010".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property resource $foto_profil
 */
class Profil010 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_010';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profil'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['foto_profil'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
    public function getMahasiswa010()
    {
        return $this->hasOne(Mahasiswa010::className(), ['id_mahasiswa' => 'id_mahasiswa']);
    }

}
