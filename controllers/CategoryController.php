<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use Yii;
use app\controllers\AppController;
use app\models\Category;
use app\models\Product;

/**
 * Description of CategoryController
 *
 * @author waise
 */
class CategoryController extends AppController{
    
    public function actionIndex(){
        
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render('index', compact('hits'));
        
    }
    
    public function actionView($id){
//        $id = Yii::$app->request->get('id');
        $products = Product::find()->where(['category_id' => $id])->all();
        
        return $this->render('view', compact('products'));
    }
    
}
