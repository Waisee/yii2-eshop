<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order_items`.
 */
class m180515_135856_create_order_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_items', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(10)->notNull(),
            'product_id' => $this->integer(10)->notNull(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->float()->notNull(),
            'qty_item' => $this->integer(10)->notNull(),
            'sum_item' => $this->float()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order_items');
    }
}
