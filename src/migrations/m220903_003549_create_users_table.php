<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m220903_003549_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => Schema::TYPE_PK,
            'firstname' => Schema::TYPE_STRING . ' NOT NULL',
            'middlename' => Schema::TYPE_STRING,
            'lastname' => Schema::TYPE_STRING . ' NOT NULL',
            'city' => Schema::TYPE_STRING . ' NOT NULL',
            'number' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
            'birthday' => Schema::TYPE_DATE . ' NOT NULL',
            'time_registration' => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
