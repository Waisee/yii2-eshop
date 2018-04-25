<?php

namespace app\models;

/**
 * Description of Category
 *
 * @author waise
 */
use yii\db\ActiveRecord;

class Category extends ActiveRecord {

    public static function tableName() {
        return 'category';
    }
    
    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

}
