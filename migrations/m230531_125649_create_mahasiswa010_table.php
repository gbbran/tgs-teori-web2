<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa010}}`.
 */
class m230531_125649_create_mahasiswa010_table extends Migration
{
      /**
         * {@inheritdoc}
         */
        public function safeUp()
        {
            $this->createTable('{{%mahasiswa010}}', [
                'id' => $this->primaryKey(),
                'no_induk_mahasiswa' => $this->string(15)->notNull(),
                'nama_mahasiswa' => $this->string(30)->notNull(),
                'kelas' => $this->string(3)->notNull(),
                'status' => $this->string(10)->notNull(),
                
            ]);
        }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa010}}');
    }
}
