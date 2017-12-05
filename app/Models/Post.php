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
    public function show($fields = ['*'], $offset, $limit){

            $fields = implode(',', $fields);
            $sql = "SELECT {$this->table}.{$fields},users.username FROM {$this->table} INNER JOIN users ON {$this->table}.id_users= users.id limit $offset, $limit";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
    }
    public function user_post($id){
            $sql = "SELECT {$this->table}.*,users.username FROM {$this->table} INNER JOIN users ON {$this->table}.id_users= users.id WHERE users.id='$id'";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
    }
    public function delete($id){
         $sql = $sql = "DELETE FROM {$this->table} WHERE {$this->primaryKey}='$id'";
         $stmt = static::$db->prepare($sql);
         return $stmt->execute();
    }
    public function update($title,$description,$detail_post,$id){
        $sql = "UPDATE {$this->table} SET title='$title',description='$description',detail_post='$detail_post' WHERE id='$id'";

        $stmt = static::$db->prepare($sql);
        return $stmt->execute();
    }
    public function row_count(){
        $sql="SELECT COUNT(id) as rowcount FROM {$this->table}";
        $stmt = static::$db->prepare($sql);
        $stmt->execute();
        $num_rows = $stmt->fetchColumn();
        return $num_rows;
    }
}