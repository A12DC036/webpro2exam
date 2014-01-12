<?php
require_once("model/product.php");

class SalesController {
    public function index() {
        // 何かの処理...

        $model_data = Product::all();        
//        var_dump($model_data);
//        $model_data = array('テレビ', '掃除機', '洗濯機');
        include('views/sales/index.php');
    }

    public function indexNew() {
        // 何かの処理...

        $model_data = Product::all();        
//        var_dump($model_data);
//        $model_data = array('テレビ', '掃除機', '洗濯機');
        include('views/sales/index.php');
    }

    public function indexCreate() {
        // 何かの処理...

        $model_data = Product::all();        
//        var_dump($model_data);
//        $model_data = array('テレビ', '掃除機', '洗濯機');
        include('views/sales/index.php');
    }

}





$controller = new SalesController();

$controller->index();

$controller->indexNew();

$controller->indexCreate();
