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

}
