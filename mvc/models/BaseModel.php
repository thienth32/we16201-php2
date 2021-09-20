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

    static function find($id){
        $model = new static();
        $queryBuilder = "select * from " . $model->table . " where id = $id";
        $conn = $model->getConnect();
        $stmt = $conn->prepare($queryBuilder);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if(count($data) > 0){
            return $data[0];
        }

        return null;
    }

    static function executeQuery($sql){
        $model = new static();
        $conn = $model->getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}


