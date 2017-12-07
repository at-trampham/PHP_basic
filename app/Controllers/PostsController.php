<?php

    namespace App\Controllers;

    use App\Models\Post;
    use App\Core\Session;
     use App\Models\User;
    class PostsController extends Controller
    {
        public function index($offset = 1)
        {
             define('NUM', '3');
             $obj=new Post(); 
             $rowcount=$obj->row_count();
             $numpage=ceil($rowcount/NUM);
             $data['post_data']=$obj->show(['*'], ($offset-1)*NUM, NUM);   
             $data['total_page']=$numpage;
             view('posts.index',$data);
        }
        public function post(){
            if(empty($_SESSION)){
                header("LOCATION:/users/login");
            }else{
                if(isset($_POST['submit'])){
                    $title=$_POST['title'];
                    $description=$_POST['description'];
                    $detail=$_POST['detail'];
                    $data=Session::get('arr_user');
                    $id_users=$data['id'];
                    $now = getdate(); 
                    $date_create = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"] .  "  - " .  $now["mday"] . "/" . $now["mon"] . "/" . $now["year"] ;
                    $data=new Post();
                    $insert_data=$data->insert($title,$description,$detail,$date_create,$id_users);
                    if($insert_data){
                        $data=Session::get('arr_user');
                        $id_users=$data['id'];
                        header("LOCATION:/users/personal/{$id_users}");
                        exit();
                    }
                    
                }
                view('posts.post');
            }
        }
        public function detail($id){
            $obj=new Post();
            $detail_data['detail_post']=$obj->find($id);
             view('posts.detail',$detail_data);
        }
        public function delete_post($id){
            if(empty($_SESSION)){
                header("LOCATION:/users/login");
            }else{
                if(isset($_POST['delete'])){
                    $data=Session::get('arr_user');
                    $id_users=$data['id'];
                    $obj=new Post();
                    $obj->delete($id);
                    header("LOCATION:/users/personal/{$id_users}");
                    exit();
                }
            }
        }
        public function edit_post($id){
            if(empty($_SESSION)){
                header("LOCATION:/users/login");
            }else{
                $obj=new Post();
                $data['data_post']=$obj->find($id);
                view('posts.edit-post',$data);
            }
        }
        public function edit($id){
            if(empty($_SESSION)){
                header("LOCATION:/users/login");
            }else{
                if(isset($_POST['submit'])){
                    $title=$_POST['title'];
                    $description=$_POST['description'];
                    $detail_post=$_POST['detail'];
                    $obj=new Post();
                    $data=$obj->update($title,$description,$detail_post,$id);
                    if($data){
                        $data=Session::get('arr_user');
                        $id_users=$data['id'];
                        header("LOCATION:/users/personal/{$id_users}");
                        exit(); 
                    } 

                }
            }  
        }


    }
