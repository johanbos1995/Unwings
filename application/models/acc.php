<?php

Class acc extends CI_Model
{
 function get_account() {
       $query = $this->db->get('user_backend');
       return $query->result_array();
    }

function get_username($name)
{
$this->db->select('Naam_Backend');
$this->db->where('Naam_Backend', $name); 

$query = $this->db->get('user_backend');

return $query->result_array();
    
}

function get_password($password)
{
$this->db->select('Wachtwoord_Backend');
$this->db->where('Wachtwoord_Backend', $password); 

$query = $this->db->get('user_backend');

return $query->result_array();
    
}

function delete_acc($id){
 
$this->db->where('id', $id);
$this->db->delete('user_backend'); 
    
}


function insert_account($Naam,$Wachtwoord_Backend,$SuperAdmin) {
      
$data = array(
   'Naam_Backend' => $Naam ,
   'Wachtwoord_Backend' => $Wachtwoord_Backend ,
   'SuperAdmin' => $SuperAdmin
);

$this->db->insert('user_backend', $data); 
    }
    
    
function update_account_name($Naam,$NewNaam) {
      
$data = array(
   'Naam_Backend' => $NewNaam 
);

$this->db->where('Naam_Backend', $Naam);
$this->db->update('user_backend', $data); 
    }
 
    function update_account_password($newPass,$Naam) {
      
$data = array(
   'Wachtwoord_Backend' => $newPass 
);

$this->db->where('Naam_Backend', $Naam);
$this->db->update('user_backend', $data); 
    }
    
    
}

