<?php 
include_once '../classes/posts.class.php';
include_once '../classes/category.class.php';


if(isset($_POST['SavePost'])){

    $title=$_POST['title']; 
    // $image=$_FILES['IMAGE']['name'];
    $ctegory=$_POST['category'];
    $description=$_POST['description'];

    $getPost = new post();
    
    $getPost->setTitle($title); 
    // $getPost->setImage($image); 
    $getPost->setCategory($ctegory); 
    $getPost->setDescription($description);

    $getPost->addPost();
    header("Location:../php/dashboard.php");

}

 $post =new post();
 $posts =$post->getPosts();



if(isset($_POST['AddCategory'])){

    $name = $_POST['category'];

    $getCategory = new category();
    
    $getCategory->name = $name; 

    $getCategory->addCategory();
    header("Location:../php/category.php");

}

 $cat =new category();

 if(isset($_GET['deletecategory'])){
    $cat= new category();
    $cat->deletecategory($_GET['deletecategory']);
}


?>