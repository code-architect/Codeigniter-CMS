<?php

class CA_Controller extends CI_Controller
{
    public $data = [];
    function __construct()
    {
        parent::__construct();
        $this->data['errors'] = [];
        $this->data['site_name'] = config_item('site_name');    // fetching items from config/ca_cams_config.php
    }
}