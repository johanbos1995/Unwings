<?php

Class products extends CI_Model
{
   function get_products() {
        $query = $this->db->get('products');
       return $query->result_array();
    }
    
    function get_account() {
       $query = $this->db->get('user_backend');
       return $query->result_array();
    }
 
 
  function add($username, $password)
 {
   $this -> db -> select('id, Naam_Backend, Wachtwoord_Backend');
   $this -> db -> from('user_backend');
   $this -> db -> where('Naam_Backend', $username);
   $this -> db -> where('Wachtwoord_Backend', md5($password));
   
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
  function delete($username, $password)
 {
   $this -> db -> select('id, Naam_Backend, Wachtwoord_Backend');
   $this -> db -> from('user_backend');
   $this -> db -> where('Naam_Backend', $username);
   $this -> db -> where('Wachtwoord_Backend', md5($password));
   
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}

