<?php

class Users extends Admin_Controller
{

    public function __construct(){
        parent::__construct();
    }

    public function login()
    {
        // rules from the user model
        $rules = $this->user_m->_rules;

        // adding the rules to the form validation library
        $this->form_validation->set_rules($rules);

        // if the form validation passes return true
        if($this->form_validation->run() == true)
        {
            // log in the user and redirect them
        }

        $this->data['subview'] = 'admin/user/login';
        $this->load->view('admin/_layout_modal', $this->data);
    }


} 