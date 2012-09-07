<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{	
		$data = array();
		$db = Database::instance();
		if ($this->request->method('POST')){
			if ($this->request->post('tags')){
				$post['tags_id'] = implode(',', $this->request->post('tags'));
				$post['photo_name'] = $_FILES["photoname"]["name"];
					
				$model = new Model_Welcome; 
				if ($model->Add($post))
					$data['message'] = 'Record saved successfully';
				else
					$data['message'] = 'Record failed to saved';
			} else {
				$data['message'] = 'Please select mandatory field';
			}	
		}
		
		if ($this->request->method('GET')){
			if ($this->request->query('tg')){
				$tag_id = $this->request->query('tg');
				
				$res = $db->query(Database::SELECT, 'select tagname from tags where id='.$tag_id, true);
				$data['message'] = 'Photos related to '.$res[0]->tagname;
				
				$res = $db->query(Database::SELECT, 'select photo_name from photo_tags where find_in_set('.$tag_id.', tags_id)', true);
				foreach ($res as $row)
					$data['photoname'][] = $row->photo_name;
			}
		}
			
			$res = $db->query(Database::SELECT, 'select *, (select count(*) from photo_tags pt where find_in_set(t.id, pt.tags_id)) as tags_cnt from tags t', true);
			
			foreach ($res as $row)
				$data['data'][$row->id] = array($row->tagname, $row->tags_cnt);
			
			$res = $db->query(Database::SELECT, 'select * from tags', true);
			
			foreach ($res as $row)
				$data['tags'][$row->id] = $row->tagname;
		
		$this->response->body(View::factory('index', $data));
	}

} // End Welcome
