<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {

	public function action_index()
	{	
		Database_MySQL::connect();
		$tbl = Database_MySQL::list_tables();
		
		$table['tables'] = $tbl;
		$data['message'] = "Hello, World";
		$this->response->body(View::factory( 'blog', $data ));
	}

} // End Welcome
