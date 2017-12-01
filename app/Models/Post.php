<?php

namespace App\Models;

class Post extends Model
{
    protected $table = 'posts';

    public function insert($title,$description,$detail_post,$date_create,$id_users){
    	$sql = "INSERT INTO {$this->table}(title,description,detail_post,date_create,id_users) VALUES ('$title','$description','$detail_post','$date_create','$id_users')";

        $stmt = static::$db->prepare($sql);
        return $stmt->execute();
    }
    public function show($fields = ['*']){

            $fields = implode(',', $fields);
            $sql = "SELECT {$fields} FROM {$this->table} INNER JOIN users ON {$this->table}.id_users= users.id";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
    }
}