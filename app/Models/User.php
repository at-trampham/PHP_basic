<?php

namespace App\Models;

class User extends Model
{
    protected $table = 'users';

    public function check($username,$password){
    	$sql = "SELECT * FROM {$this->table} WHERE username='$username' and password='$password'";
        $stmt = static::$db->prepare($sql);
        $stmt->execute();
		return $stmt->fetch();
    }
    public function check_account($username){
    	$sql="SELECT * FROM users WHERE username='$username'";
    	$stmt = static::$db->prepare($sql);
        $stmt->execute();
		return $stmt->fetch();
    }
    public function insert($username,$password){
        $sql = "INSERT INTO {$this->table}(username,password) VALUES ('$username','$password')";
        $stmt = static::$db->prepare($sql);
        return $stmt->execute();
    }
}
