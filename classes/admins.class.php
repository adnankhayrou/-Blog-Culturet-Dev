<?php
include_once 'database.class.php';

    abstract class admins extends Database{
        protected $id = NULL;
        protected $Name;
        protected $password;
        protected $email;

        public function __construct ($name="" ,$pass ="", $emi="")
        {
            $this->id        = NULL;
            $this->Name      = $name;
            $this->password  = $pass;
            $this->email     = $emi;
        }

        public function setName($name){
            $this->Name = $name;
        }
        public function setPassword($pas){
            $this->password = $pas;
        }
        public function setEmail($emi){
            $this->email = $emi;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this->Name ;
        }
        public function getPassword(){
            return $this->password  ;
        }
        public function getEmail(){
            return $this->email  ;
        }
        public function getId(){
            return $this->id;
        }

        public function addSession(){
           session_start();
          $_SESSION['name'] = $this->Name;
          $_SESSION['id'] = $this->id;
        }

    }

?>