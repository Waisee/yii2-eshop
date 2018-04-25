<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180425_081318_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(10)->notNull()->defaultValue(0),
            'name' => $this->string(255)->notNull(),
            'keywords' => $this->string(255)->defaultValue(null),
            'description' => $this->string(255)->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
