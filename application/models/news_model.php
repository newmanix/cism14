<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

	public function __construct()
	{

		
	}
	
	public function get_news($id = 0)
	{
		  $request = "http://rss.news.yahoo.com/rss/software";
		  $response = file_get_contents($request);
  		  return simplexml_load_string($response);
		
		
		/*
		if((int)$id == 0)
		{//id  is zero, show all!
			return $this->db->get('test_Customers');
		}else{//show one customer
			return $this->db->get_where('test_Customers',array('CustomerID'=>$id));
		}*/

	}#end get_customers()
}

