<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mhs}}`.
 */
class m230525_024851_create_mhs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs}}', [
            'id' => $this->primaryKey(),
            'nim'=> $this->string(6)->notNull(),
            'nama'=> $this->string(32)->notNull(),
            'kelas'=> $this->string(2)->notNull(),
            'jurusan'=> $this->string(8)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs}}');
    }
}
