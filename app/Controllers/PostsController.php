<?php

    namespace App\Controllers;

    use App\Models\Post;
    use App\Core\Session;
     use App\Models\User;
    class PostsController extends Controller
    {
        public function index()
        {
             $obj=new Post();
             $data['post_data']=$obj->show();       
             view('posts.index',$data);
        }
        public function post(){
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
                
            }
            view('posts.post');
        }
        public function detail($id){
            $obj=new Post();
            $detail_data['detail_post']=$obj->find($id);
             view('posts.detail',$detail_data);
        }
    }
