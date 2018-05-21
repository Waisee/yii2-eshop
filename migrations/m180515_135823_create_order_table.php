<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m180515_135823_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'qty' => $this->integer(10)->notNull(),
            'sum' => $this->float()->notNull(),
            'status' => "enum('" . 0 . "','" . 1 . "') NOT NULL DEFAULT '" . 0 . "'",
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'address' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }
}
