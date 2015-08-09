<?php

Class User extends CI_Model
{
 function login($username, $password)
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

