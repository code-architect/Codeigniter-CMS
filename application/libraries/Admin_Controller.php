<?php

class Admin_Controller extends CA_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->data['meta_title'] = 'Code-Architect';
    }
}