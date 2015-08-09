<?php

Class template extends CI_Model {

    function get_bg_color() {
        $this->db->select('temp_color');
        $this->db->where('temp_name', 'bg_color');

        $query = $this->db->get('template');

        return $query->result_array();
    }

    function get_h_color() {
        $this->db->select('temp_color');
        $this->db->where('temp_name', 'h_color');

        $query = $this->db->get('template');

        return $query->result_array();
    }

    function get_c_color() {
        $this->db->select('temp_color');
        $this->db->where('temp_name', 'c_color');

        $query = $this->db->get('template');

        return $query->result_array();
    }
    
    function get_text_color() {
        $this->db->select('temp_color');
        $this->db->where('temp_name', 'text_color');

        $query = $this->db->get('template');

        return $query->result_array();
    }
    
    function get_border_color() {
        $this->db->select('temp_color');
        $this->db->where('temp_name', 'border_color');

        $query = $this->db->get('template');

        return $query->result_array();
    }
    
    function get_header_color() {
        $this->db->select('temp_color');
        $this->db->where('temp_name', 'header_text');

        $query = $this->db->get('template');

        return $query->result_array();
    }
    
     function update_bg_color($color) {
      
$data = array(
   'temp_color' => $color 
);

$this->db->where('temp_name', 'bg_color');
$this->db->update('template', $data); 
    }
    
    function update_h_color($color) {
      
$data = array(
   'temp_color' => $color 
);

$this->db->where('temp_name', 'h_color');
$this->db->update('template', $data); 
    }
    
    function update_c_color($color) {
      
$data = array(
   'temp_color' => $color 
);

$this->db->where('temp_name', 'c_color');
$this->db->update('template', $data); 
    }
   
    function update_text_color($color) {
      
$data = array(
   'temp_color' => $color 
);

$this->db->where('temp_name', 'text_color');
$this->db->update('template', $data); 
    }
    
    function update_border_color($color) {
      
$data = array(
   'temp_color' => $color 
);

$this->db->where('temp_name', 'border_color');
$this->db->update('template', $data); 
    }
    
    function update_header_color($color) {
      
$data = array(
   'temp_color' => $color 
);

$this->db->where('temp_name', 'header_text');
$this->db->update('template', $data); 
    }

}
