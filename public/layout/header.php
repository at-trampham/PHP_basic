<?php
session_start();
use App\Core\Session;

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TRAM-PHAM-BLOG-DEMO-MVC-PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../../css/clean-blog.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body>
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <?php 
           if(Session::get('arr_user')!=null){
               
        ?>
        <a class="navbar-brand" href="/posts/index">Xin chao <font color='red'><?php echo Session::get('arr_user')['username']; ?></font></a>
        <?php
          }else{
        ?>
        <a class="navbar-brand" href="/posts/index">Hello Guest</a>
        <?php
          }
        ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/posts/index">Home</a>
            </li>
            <?php 
              if(Session::get('arr_user')!=null){
               $id=Session::get('arr_user')['id'];
               $url='/users/personal/'.$id;
              ?>
            <li class="nav-item">
              <a class="nav-link" href="/posts/post">Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $url ?>">Personal</a>
            </li>
            <?php
              }
              else
              {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="/users/register">Register</a>
            </li>
            <?php
              }
            ?>
            <li class="nav-item">
              <?php 
              if(Session::get('arr_user')!=null){
               
              ?>
              <a class="nav-link" href="/users/logout">Logout</a>
              <?php
              }else{ 
              ?>
              <a class="nav-link" href="/users/login">Login</a>

              <?php
                }
              ?>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../public/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>
