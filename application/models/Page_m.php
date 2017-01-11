<?php

/**
 * Model Class for pages table
 */
class Page_m extends CA_Model
{
    protected $_table_name = 'pages';
    protected $_primary_key = 'page_id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'page_order';
    public $_rules = [];
    protected $_timestamp = FALSE;


    function __construct()
    {
        parent::__construct();
    }
}