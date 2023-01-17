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

        public function getObject($dbObject){
            $this->id = $dbObject->id;
            $this->title = $dbObject->title;
            $this->image = $dbObject->image;
            $this->category = $dbObject->categorey;
            $this->description = $dbObject->description;
        }

        //crud

        public function getPosts(){
            $database = new Database();
            $sql = "SELECT * FROM `posts`";
            $stmt = $database->connect()->prepare($sql);
            $stmt->execute();
            $dbPosts = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            $posts = array();
            
            $i=0;
            foreach($dbPosts as $dbPost){
                $posts[$i] = new post();
                $posts[$i]->getObject($dbPost);
                $i++;
            }
            return $posts;
            
        }


        public function addPost(){
        $database =new Database();
        $sql="INSERT INTO posts (title,image,description,category_id)  VALUES (?,?,?,?)";
        $stmt= $database->connect()->prepare($sql);
        $stmt->execute([$this->getTitle(),$this->getImage(),$this->getDescription(),$this->getCategory()]);    
        }

        public function updatePost($id){
        }

        public function deletePost($id){
        }
    }


    









?>