<?php

class Product {

    private $id;
    private $name;
    private $price;

    public function __construct($params) {
        $this->id    = isset($params['id']) ? $params['id'] : null;
        $this->name  = isset($params['name']) ? $params['name'] : null;
        $this->price = isset($params['price']) ? $params['price'] : null;
    }

    public static function all() {
// DB saccess (SELECT)
        try {
          $pdo = new PDO('mysql:dbname=webpro2exam;host=localhost', 'root', 'root');
        } catch (PDOException $e) {
          exit('データベースに接続できませんでした。' . $e->getMessage());
        }

        $stmt = $pdo->query('SET NAMES utf8');
        if (!$stmt) {
          $info = $pdo->errorInfo();
          exit($info[2]);
        }

        $stmt = $pdo->query('SELECT name FROM Products');
        if (!$stmt) {
          $info = $pdo->errorInfo();
          exit($info[2]);
        }

        $rtn_data = array();
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $params['id'] = $data['id'];
            $params['name'] = $data['name'];
            $params['pricae'] = $data['price'];
            $product_temp = new Product($params);
//          array_push($rtn_data,$product_temp);
            array_push($rtn_data,$data['name']);
        }
        $pdo = null;

        return $rtn_data;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

}
