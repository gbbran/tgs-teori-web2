<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa010".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa010 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa010';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'required'],
            [['no_induk_mahasiswa', 'kelas', 'status'], 'string', 'max' => 15],
            [['nama_mahasiswa'], 'string', 'max' => 30],
           
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID010',
            'no_induk_mahasiswa' => 'NIM MHS010',
            'nama_mahasiswa' => 'Nama MHS010',
            'kelas' => 'Kelas010',
            'status' => 'Status010',
        ];
    }

    public function getMahasiswa010()
    {
        return $this->hasOne(Mahasiswa010::className(), ['id' => 'id' ]);
    }
}
