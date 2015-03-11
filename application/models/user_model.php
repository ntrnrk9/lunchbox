<?php

class User_model extends CI_Model{
    
    public function can_log_in() {
        
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('password',md5($this->input->post('password')));
        $query=  $this->db->get('users');
        if($query->num_rows()==1)
        {
            return TRUE;
        }  else {
            
        return FALSE;
        }

        
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

