<?php

namespace app\controllers;

use Yii;
use app\models\Category;
use app\models\Product;
use yii\data\Pagination;

class ProductController extends AppController {

    public function actionView($id) {

        $product = Product::findOne($id);

        if (empty($product)) {
            throw new \yii\web\HttpException(404, 'Такого товара нет');
        }

        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();

        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);

        return $this->render('view', compact('product', 'hits'));
    }

    public function actionSearch() {

        $q = trim(Yii::$app->request->get('q'));
        
        $this->setMeta('E-SHOPPER | ' . $q );
        
        if (!$q) {
            return $this->render('search');
        }
        
        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        
        return $this->render('search', compact('products', 'pages', 'q'));
    }

}
