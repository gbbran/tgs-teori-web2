<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m230526_001752_create_user_table extends Migration
{               
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'user name'=> $this->string(6)->notNull(),
            'password'=> $this->string(6)->notNull(),
            'nama'=> $this->string(36)->notNull(),
            'image'=> $this->string(32)->notNull(),
            'tgl-lahir'=> $this->string(32)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */                         
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
