<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%messages}}`.
 */
class m220903_003649_create_messages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%messages}}', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER,
            'message' => Schema::TYPE_TEXT . ' NOT NULL',
            'time_message' => Schema::TYPE_DATETIME . ' NOT NULL',
            'is_read' => Schema::TYPE_BOOLEAN . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%messages}}');
    }
}
