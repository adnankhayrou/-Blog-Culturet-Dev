<?php 
include_once '../classes/posts.class.php';
include_once '../classes/category.class.php';
include_once '../classes/scripts.class.php';



if(isset($_POST['SavePost'])){
    // echo "<hr>" ;
    // echo "<pre>" ;
    // var_dump($_POST) ;
    // echo "<pre>" ;
    // echo "<hr>" ;
    // foreach($_POST['title'] as $key => $value){
    //     // echo "<pre>" ;
    //         // echo "<hr>" ;
    //         // echo   "title : ".$_POST['title'][$key] ;
    //         // echo "<hr>" ;
    //         // echo   "description :".$_POST['description'][$key] ;
    //         // echo "<hr>" ;

    //     // echo "<pre>" ;
    // }
    // die() ;  
    // $title=$_POST['title']; 
    // $image=$_POST['image'];
    // $category=$_POST['category'];
    // $description=$_POST['description'];
    

    // echo "<pre>";
    // print_r($_POST);
    // echo "/<pre>";
    // die ;
    $getPost = new post();
    $getPost->addPost($_POST);
    header("Location:../php/dashboard.php");
    
    // $getPost->setTitle($title[$i]); 
    // $getPost->setImage($image[$i]); 
    // $getPost->setCategory($ctegory[$i]); 
    // $getPost->setDescription($description[$i]);

    }
    

 $post =new post();




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



if(isset($_GET['deletePost'])){
    $post= new post();
    $post->deletePost($_GET['deletePost']);
}

if(isset($_GET['logout'])){
    $admins->logOut();
}

?>