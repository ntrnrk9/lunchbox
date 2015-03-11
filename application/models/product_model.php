<?php

class Product_model extends CI_Model{
    
    function  __construct()
    {
        parent::__construct();
    }
    
    public function findAll($type){
        
        if($type=='Veg')
        {
          $sql = "SELECT * FROM products WHERE product_type =?";
           return $this->db->query($sql,array($type))->result();
        }else{
        return $this->db->get('products')->result();
        }
    }
    
    public function find($id){
             
        $sql = "SELECT * FROM products WHERE product_code = ?";

        return $this->db->query($sql,array($id))->row();
    }

}
?>