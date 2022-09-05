<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%avatars}}`.
 */
class m220903_003812_create_avatars_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%avatars}}', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER,
            'path' => Schema::TYPE_TEXT . ' NOT NULL',
            'time_upload' => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%avatars}}');
    }
}
