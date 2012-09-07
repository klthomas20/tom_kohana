<?php defined('SYSPATH') or die('No direct script access.');

class Model_Welcome extends Model{

    public function Add($post)
    {	
		move_uploaded_file($_FILES["photoname"]["tmp_name"], "application/upload/" . $_FILES["photoname"]["name"]);
	
        $data['tags_id'] = $post['tags_id'];
        $data['photo_name'] = $post['photo_name'];

        return DB::insert('photo_tags', array_keys($data))
        ->values(array_values($data))
        ->execute();
    }
}