<?php

class Welcome_model extends CI_Model
{
	public function getdata()
	{
		return $this->db->query('select * from products where id="2"');
		 //array("firstname" => "siva","surname" => "polisetty");
	}

}
?>