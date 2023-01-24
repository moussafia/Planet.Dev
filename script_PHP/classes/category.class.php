<?php

class Category{
    public $id;
    public $category;
    
    function getid(){
        return $this->id;
    }
    function getcategory(){
        return $this->category;
    }
    function setcategory($category){
        return $this->category = $category;
    }
    function createCategory(){
        $db=new Db;
        $conn = $db->connectDB();
        $statement = $conn->query("SELECT * FROM `category` WHERE `category` like '$this->category'");
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if (isset($row['category'])) {
            $_SESSION['idcategory'] = $row['id'];
        }else {
            $req = $conn->prepare("insert into category(`category`) value(?)");
            $result = $req->execute(array($this->category));
            $_SESSION['idcategory'] = $conn->lastInsertId();
            return $result;
        }
    }
    public static function fetshcategory(){
        $db=new Db;
        $conn = $db->connectDB();
        $req = $conn->query("SELECT * FROM `category`");
        return $req;
    }
}