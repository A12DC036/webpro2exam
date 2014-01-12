<?php
require_once("model/product.php");

class ProductsController {
    public function index() {
        // 何かの処理...

        $model_data = Product::all();        
//        var_dump($model_data);
//        $model_data = array('テレビ', '掃除機', '洗濯機');
        include('views/products/index.php');
    }
}

$controller = new ProductsController();
$controller->index();
