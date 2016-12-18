<?php

class CA_Model extends CI_Model
{
    protected $_table_name = '';
    protected $_primary_key = '';
    protected $_primary_filter = 'intval';
    protected $_order_by = '';
    protected $_rules = [];
    protected $_timestamp = FALSE;

    function __construct()
    {
        parent::__construct();
    }

    //-----------------------------------------------------------------------------------------


    public function get($id = NULL, $single = FALSE)
    {
        // if we have an id filter it, and run a where statement, and return a single row
        if($id != null)
        {
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->where($this->_primary_key, $id);
            $method = 'row';
        }
        // if single is true return a single row
        elseif($single == TRUE)
        {
            $method = 'row';
        }
        // else return everything
        else
        {
            $method = 'result';
        }

        $this->db->order_by($this->_order_by);
        return $this->db->get($this->_table_name)->$method();
    }

    //-----------------------------------------------------------------------------------------


    public function get_by($where, $single = FALSE)
    {
        $this->db->where($where);
        return $this->get(NULL, $single);

    }

    //-----------------------------------------------------------------------------------------

    public function save()
    {

    }

    //-----------------------------------------------------------------------------------------


    public function delete()
    {

    }

    //-----------------------------------------------------------------------------------------

}