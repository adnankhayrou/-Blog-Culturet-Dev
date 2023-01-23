<?php
    include_once 'database.class.php';

    class category {

        public $id = NULL;
        public $name;
       


        public function __construct($Name ="")
        {
            $this->name = $Name;
        }
        
        //crud

        public function getCategory(){
            $database = new Database();
            $sql = "SELECT * FROM category";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbcategory = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $dbcategory;
            
        }

        // public function getCategoryy($id){
        //     $database = new Database();
        //     $sql = "SELECT * FROM category WHERE id = ?";
        //     $stmt = $database->connect()->prepare($sql);
        //     $stmt->execute([$id]);
        //     $dbcategory = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //     return $dbcategory;
            
        // }


        public function addCategory(){
        $database =new Database();
        $sql="INSERT INTO category (nameCategory)  VALUES (?)";
        $stmt= $database->connect()->prepare($sql);

        $stmt->execute([$this->name]);    
        }

        public function updatecategory($id){
            $database = new Database();
            $query="UPDATE posts SET nameCategory=?  WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$this->name, $id]);
            if($result)
                header('location:../php/category.php');
        }


        public function deletecategory($id){
            $database =new Database();
            $query="DELETE FROM category WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$id]);
            if($result)
                header('location:../php/category.php');
        }
    }


    









?>