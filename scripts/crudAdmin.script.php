<?php 
include_once '../classes/posts.class.php';


if(isset($_POST['SavePost'])){

    $title=$_POST['title']; 
    $image=$_FILES['image']['name'];
    $ctegory=$_POST['category'];
    $description=$_POST['description'];

    $getPost = new post();
    
    $getPost->setTitle($title); 
    $getPost->setImage($image); 
    $getPost->setCategory($ctegory); 
    $getPost->setDescription($description);

    $getPost->addPost();
    header("Location:../php/dashboard.php");

}

 $post =new post();
 $posts =$post->getPosts();


 // partie statistique 
    // pour les stades 
    // $stadstatique = new Statistique();
    // $statiquestad= $stadstatique->stadst();   
    // pour les matches 
    // $matchstatique = new Statistique();
    // $statisquematch=$matchstatique-> matchst();
    // pour les user 
    // $userstatitique = new Statistique();
    // $statiqueuser = $userstatitique->userst();

?>