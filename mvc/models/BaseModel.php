<?php
class BaseModel{

    function getConnect(){
        $connect = new PDO("mysql:host=127.0.0.1;dbname=we16201;charset=utf8", 
                            'root', '12345678');
        return $connect;
    }

    static function getAll(){
        $model = new static();
        $queryBuilder = "select * from " . $model->table;
        $conn = $model->getConnect();
        $stmt = $conn->prepare($queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    }
}


