<?php

/**
 * Model Class for pages table
 */
class User_m extends CA_Model
{
    protected $_table_name = 'users';
    protected $_primary_key = 'user_id';
    protected $_primary_filter = 'intval';
    public $_rules = [
        'email' => [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean'
        ],
        'password' => [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        ],
    ];

    function __construct()
    {
        parent::__construct();
    }
}