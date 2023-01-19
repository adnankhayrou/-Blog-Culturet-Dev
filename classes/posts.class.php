<?php
    include_once 'database.class.php';

    class post {

        private $id = NULL;
        private $title;
        private $image;
        private $category;
        private $description;


        public function __construct($tit ="" , $img ="" , $cat ="" , $des ="")
        {
            $this->title = $tit;
            $this->image = $img;
            $this->category = $cat;
            $this->description = $des;
        }

        public function getId(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getImage(){
            return $this->image;
        }
        public function getCategory(){
            return $this->category;
        }
        public function getDescription(){
            return $this->description;
        }



        public function setTitle($tit){
            $this->title = $tit;
        }
        public function setImage($img){
            $this->image = $img;
        }
        public function setCategory($cat){
            $this->category = $cat;
        }
        public function setDescription($des){
            $this->description = $des;
        }

        // public function getObject($dbObject){
        //     $this->id = $dbObject->id;
        //     $this->title = $dbObject->title;
        //     $this->image = $dbObject->image;
        //     $this->category = $dbObject->categorey;
        //     $this->description = $dbObject->description;
        // }

        //crud

        public function getPosts(){
            $database = new Database();
            $sql = "SELECT *, posts.id id_post FROM posts INNER JOIN category ON category.id = posts.category_id ORDER BY posts.id ";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $dbPosts;
            
        }

        public function getPost($id){
            $database = new Database();
            $sql = "SELECT *,posts.id id_post  FROM posts INNER JOIN category ON category.id = posts.category_id   WHERE posts.id = ?";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$id]);
            $dbPosts = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $dbPosts;
            
        }


        public function addPost(){
        $database =new Database();
        $sql="INSERT INTO posts (title,image,description,category_id)  VALUES (?,?,?,?)";
        $stmt= $database->connect()->prepare($sql);
        $stmt->execute([$this->getTitle(),$this->getImage(),$this->getDescription(),$this->getCategory()]);    
        }

        public function updatepost($id){
            $database = new Database();
            $query="UPDATE posts SET title=? , image=? , description=? , category_id=? WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$this->getTitle(),$this->getImage(),$this->getDescription(),$this->getCategory(), $id]);
            if($result)
                header('location:../php/dashboard.php');
        }

        public function deletePost($id){
            $database =new Database();
            $query="DELETE FROM posts WHERE id=?";
            $result = $database->connect()->prepare($query);
            $result->execute([$id]);
            if($result)
                header('location:../php/dashboard.php');
        }
        
    }


    









?>