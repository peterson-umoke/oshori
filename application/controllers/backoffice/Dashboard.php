<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public $data = array();

    public function __construct() {
        parent::__construct();

        // load the database
        $this->load->database();

        // load the helpers
        $this->load->helper(["language","maintenance_page"]);

        //load hthe library
        $this->load->library(["form_validation","ion_auth"]);

        // load model needed for the page
        $this->load->model("Navigation_model");

        if($this->config->item('maintenance_mode')){
            show_maintenance();
        }

        //check if the user is not logged in and is also not an administrator
        if(!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
            // return show_error("You must be an admin to view this page");
            redirect("backoffice");
        }
    }

    public function index() {
        $this->data['body_class'] = "hold-transition skin-blue sidebar-mini";
        $this->data['user'] = $this->ion_auth->user()->row();
        $identity = $this->data['user']->email;
        $this->data['login_attempts_by_this_user'] = $this->ion_auth->get_attempts_num($identity);
        $this->data['title'] = "Welcome to The Backoffice";
        $this->data['page_title'] = "Welcome, ". $this->data['user']->first_name;
        $this->data['page_description'] = "Get an overview of the whole about the site here!";
        $this->data['users'] = $this->ion_auth->users()->result();

        $this->load->view("backoffice/header",$this->data);
        $this->load->view("backoffice/_header",$this->data);
        $this->load->view("backoffice/navigation",$this->data);
        $this->load->view("backoffice/welcome/_content",$this->data);
        $this->load->view("backoffice/_footer",$this->data);
        $this->load->view("backoffice/footer",$this->data);
    }
}