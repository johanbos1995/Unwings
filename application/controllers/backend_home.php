<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class backend_home extends CI_Controller {

 function __construct()
 {
    parent::__construct();
   $this->load->model('products','',TRUE);
   $this->load->model('acc','',TRUE);
   $this->load->model('template','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['username'];
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/backend_home', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
 
 function products()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result = $this->products->get_products();
    
     $data = array(
               'username' => $session_data['username'],
               'result' => $result,
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/products', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
  function AddProductsLanding()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result = $this->products->get_products();
    
     $data = array(
               'username' => $session_data['username'],
               'result' => $result,
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/add_product', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
  function accounts()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result = $this->acc->get_account();
     //$result = $this->accounts->get_account_info();
    
     $data = array(
               'username' => $session_data['username'],
               'result' => $result,
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/accounts', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
  function AddAccountLanding()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
    
    
     $data = array(
               'username' => $session_data['username'],
              
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/add_accounts', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
  function InsertAccountBackend()
 {
       $name = $this->input->post('Name');
       $wachtwoord = $this->input->post('Password');
       $wachtwoord_check = $this->input->post('Password_check');
       $SuperAdmin =  $this->input->post('SuperAdmin');
       
       $naam_uitdb = $this->acc->get_username($name);
       $naam_check = "";
       foreach ($naam_uitdb as $row) {
           $naam_check = $row['Naam_Backend'];
       }
     
       
      
      if($naam_check === $name)
      {
          
       echo "Username is already used" ;
     
      }
      else
      {
      if($wachtwoord_check === $wachtwoord)
      {
          $wachtwoord_encrypt = md5($wachtwoord);
          
           $this->acc->insert_account($name,$wachtwoord_encrypt,$SuperAdmin);
           
            redirect('backend_home/accounts', 'refresh');
                 
      }
      else
      {
          echo "Something is not right";
      }
      }
      
      
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
    
    
     $data = array(
               'username' => $session_data['username'],
              
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/add_accounts', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
 
  function DeleteAccountBackend()
 {
       $id = $this->input->post('id_delete');
              
       $this->acc->delete_acc($id);
       
       redirect('backend_home/accounts', 'refresh');
      
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
    
    
     $data = array(
               'username' => $session_data['username'],
              
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/add_accounts', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
 
   function ChangeAccSetting()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result = $this->acc->get_account();
     //$result = $this->accounts->get_account_info();
    
     $data = array(
               'username' => $session_data['username'],
               'result' => $result,
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/changeacc', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
  function ChangeUsername()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result = $this->acc->get_account();
     //$result = $this->accounts->get_account_info();
    
     $data = array(
               'username' => $session_data['username'],
               'result' => $result,
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/UsernameChange', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
 function ChangeUsername_Check(){
       $name = $this->input->post('Name');
       $name_check = $this->input->post('Name_Check');
       $name_check_session =  $this->input->post('Name_Session');
       $new_name = $this->input->post('New_Name');
       $new_name_check =  $this->input->post('New_Name_Check');
       
       $naam_uitdb = $this->acc->get_username($new_name);
       $naam_check = "";
       foreach ($naam_uitdb as $row) {
           $naam_check = $row['Naam_Backend'];
       }
     
       
      
      if($name != $name_check)
      {
          
       echo "Username old is not the same" ;
//       redirect('backend_home/ChangeUsername', 'refresh');
     
      }
      else if ($new_name != $new_name_check)
      {
          echo "Username new is not the same" ; 
//          redirect('backend_home/ChangeUsername', 'refresh');
      }
      else if ($name === $naam_check)
      {
          echo  "New username already in the database" ;
//          redirect('backend_home/ChangeUsername', 'refresh');
          
      }
      else if ($name != $name_check_session)
      {
        echo "Your old name does not match"; 
//        redirect('backend_home/ChangeUsername', 'refresh');
      }    
      else
      {
      if($name === $name_check && $new_name === $new_name_check )
      {
          
          
           $this->acc->update_account_name($name,$new_name);
           
            redirect('backend_home/ChangeAccSetting', 'refresh');
                 
      }
      else
      {
          echo "Something is not right";
      }
      }
      
      
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
    
    
     $data = array(
               'username' => $session_data['username'],
              
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/UsernameChange', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
     
 }
 
 
 
  function ChangePassword()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result = $this->acc->get_account();
     //$result = $this->accounts->get_account_info();
    
     $data = array(
               'username' => $session_data['username'],
               'result' => $result,
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/PasswordChange', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
  function UpdateChangePassword()
 {
       $Username = $this->input->post('Username');
       $Password = $this->input->post('Password');
       $Password_check = $this->input->post('Password_Check');
       $new_password = $this->input->post('New_Password');
       $new_password_check =  $this->input->post('New_Password_Check');
       
     
       
       $Password = md5($Password);
       $Password_check = md5($Password_check);
       $new_password = md5($new_password);
       $new_password_check =  md5($new_password_check);
       
       $pass_uitdb = $this->acc->get_password($Password);
       $pass_check = "";
       foreach ($pass_uitdb as $row) {
           $pass_check = $row['Wachtwoord_Backend'];
       }
     
     
      
      if($Password != $Password_check)
      {
          
       echo "Password old is not the same" ;
//       redirect('backend_home/ChangeUsername', 'refresh');
     
      }
      else if ($new_password != $new_password_check)
      {
          echo "Password new is not the same" ; 
//          redirect('backend_home/ChangeUsername', 'refresh');
      }
      else if ($Password != $pass_check)
      {
          echo  "Old password is not in the database" ;
//          redirect('backend_home/ChangeUsername', 'refresh');
          
      }
      else
      {
      if($Password === $Password_check && $new_password === $new_password_check && $Password === $pass_check)
      {
          
          
           $this->acc->update_account_password($new_password,$Username);
           
            redirect('backend_home/ChangeAccSetting', 'refresh');
                 
      }
      else
      {
          echo "Something is not right";
      }
      }
      
      
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
    
    
     $data = array(
               'username' => $session_data['username'],
                             
               
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/PasswordChange', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
     
 }
 
   function TemplateHome()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result = $this->acc->get_account();
     //$result = $this->accounts->get_account_info();
    
     $data = array(
               'username' => $session_data['username'],
                              
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/templatehome', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
   function TemplateChange()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result = $this->acc->get_account();
     //$result = $this->accounts->get_account_info();
    
     $data = array(
               'username' => $session_data['username'],
        
                              
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/templatechange', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 
   function UpdateTemplateChange()
 {
       
   $bg_color = $this->input->post('bg_color');
   $h_color = $this->input->post('h_color');
   $c_color = $this->input->post('c_color');
   $text_color = $this->input->post('text_color');
   $border_color = $this->input->post('border_color');
   $header_color = $this->input->post('header_color');
   
   $this->template->update_bg_color($bg_color);
   $this->template->update_h_color($h_color);
   $this->template->update_c_color($c_color);
   $this->template->update_text_color($text_color);
   $this->template->update_border_color($border_color);
   $this->template->update_header_color($header_color);
   
      
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $result = $this->acc->get_account();
     //$result = $this->accounts->get_account_info();
    
     $data = array(
               'username' => $session_data['username'],
        
                              
          );
     $this->load->view('header/header_backend', $data);
     $this->load->view('backend/templatechange', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('backend', 'refresh');
   }
 }
 

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('backend_home', 'refresh');
 }

}

?>