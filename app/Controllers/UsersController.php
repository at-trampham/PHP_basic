<?php

    namespace App\Controllers;

    use App\Models\User;
    use App\Core\Session;

    class UsersController extends Controller
    {
        public function show($id)
        {
            $user=new User();

            $data['aaa']=$user->find($id);
             view('users.show',$data);
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
        public function logout(){
            Session::destroy();
                header ("LOCATION:/users/login");
                exit();
            }
    }