<?php

    namespace App\Controllers;

    use App\Models\User;
    use App\Core\Session;
    use App\Models\Post;

    class UsersController extends Controller
    {
        public function personal($id)
        {
            $obj=new Post();
            $user_post['data']=$obj->user_post($id);
            view('users.personal-info',$user_post);
        }
        public function login(){
            if(isset($_POST['submit'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $check=new User();
                $data=$check->check($username,$password);
                $count=count($data);

                if($count>1){
                    Session::set('arr_user',$data);
                    header ("LOCATION:/posts/index");
                    exit();
                }
                else{
                    $err='Sai ten dang nhap hoac mat khau';
                }
            }

            view('users.login');
        }
        public function register(){
            $obj=new User();
            if(isset($_POST['submit'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $data=$obj->check_account($username);
                $count=count($data);
                if($count>1){
                    $data['error']="Username is invalid,it has existed";
                    return view("users.register",$data);
                }else{
                    $result=$obj->insert($username,$password);
                    header('LOCATION:/users/login');
                    exit();
                }
            }
            view("users.register");
        }
        public function logout(){
            Session::destroy();
                header ("LOCATION:/users/login");
                exit();
        }
        
    }