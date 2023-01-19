<?php 
include_once 'database.class.php';
include_once 'admins.class.php';

session_start();

    class admin extends admins {

        public function isExistAdmin($email){
            $database = new Database();
            $sql = "SELECT * FROM `admins` WHERE email =?";

            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$email]);

            return $stmt->rowCount();
            
        }

        public function addAdmin(){
            $conn = new Database();
            try{

                $sql1 = "INSERT INTO admins(name, email, password) values(?,?,?)";
                $put = $conn->connect()->prepare($sql1);
                $put->execute([$this->Name, $this->email, $this->password]);

                echo"<script>alert('successfully');document.location='../php/login.php'</script>";
        
            }catch(Exception $e){
                return $e->getMessage();
            }
        }


        public function loginAdmin() { 
            $conn = new Database();

            $sql = "SELECT * FROM `admins` WHERE email = ? AND password = ?;";
            $stmt =  $conn->connect()->prepare($sql);
            $stmt->execute([$this->email, $this->password]);
            $admin = $stmt -> fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                
                $_SESSION['name'] = $admin['name'];
                $_SESSION['id'] = $admin['id'];

                echo"<script>alert('successfully');document.location='../php/dashboard.php'</script>";
            } else {
                echo"<script>alert('incorrect inputs');document.location='../php/login.php'</script>";
            }
        }

        public function Admins() { 
            $conn = new Database();

            $sql = "SELECT * FROM admins ";
            $stmt =  $conn->connect()->prepare($sql);
            $stmt->execute();
            $admin = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $admin;
        }

        

        public function logOut() {
            if (isset($_SESSION['name'])) {
                session_destroy();
                // unset($_SESSION['name']);
                // header('location:signin.php');
                echo"<script>alert('successfully');document.location='../php/login.php'</script>";
            }
        }

    }

    $admins = new admin ;
?> 