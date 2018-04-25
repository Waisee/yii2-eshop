<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180425_081256_create_product_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(10)->notNull(),
            'name' => $this->string(255)->notNull(),
            'content' => $this->text()->defaultValue(null),
            'price' => $this->float()->notNull()->defaultValue(0),
            'keywords' => $this->string(255)->defaultValue(null),
            'description' => $this->string(255)->defaultValue(null),
            'img' => $this->string(255)->defaultValue('no-image.png'),
            'hit' => "enum('" . 0 . "','" . 1 . "') NOT NULL DEFAULT '" . 0 . "'",
            'new' => "enum('" . 0 . "','" . 1 . "') NOT NULL DEFAULT '" . 0 . "'",
            'sale' => "enum('" . 0 . "','" . 1 . "') NOT NULL DEFAULT '" . 0 . "'",
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('product');
    }

}
