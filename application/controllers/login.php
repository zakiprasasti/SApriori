<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Login extends CI_Controller {

    public function index() { 
            $valid = $this->form_validation;  
            $username = $this->input->post('username');  
            $password = $this->input->post('password');  
            $valid->set_rules('username','Username','required');  
            $valid->set_rules('password','Password','required');  

            if($valid->run()) {  
                    $this->simple_login->login($username,$password, base_url('dashboard'), base_url('login'));  
            }   
               $this->load->view('v_login');
        }  
        
    public function logout(){
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('login');
        redirect('login','refresh');
    }
}