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

    /**
     * Get data by given input
     * @param null $id
     * @param bool $single
     * @return mixed
     */
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

        // If an order is already set by db library, set it
        if($this->_order_by != '' || $this->_order_by != null){
            $this->db->order_by($this->_order_by);
        }
        return $this->db->get($this->_table_name)->$method();
    }

    //-----------------------------------------------------------------------------------------


    /**
     * GEt data by where condition
     * @param $where
     * @param bool $single
     * @return mixed
     */
    public function get_by($where, $single = FALSE)
    {
        $this->db->where($where);
        return $this->get(NULL, $single);

    }

    //-----------------------------------------------------------------------------------------

    public function save($data, $id = null)
    {
        // check if have set timestamps
        if($this->_timestamp == true)
        {
            $now = date('Y-m-d H:i:s');
            $id || $data['created'] = $now;
            $data['modified'] = $now;
        }

        // if id not present it's an insert
        if($id === null)
        {
            // if primary key is set , set it to null when inserting
            !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = null;
            $this->db->set($data);
            $this->db->insert($this->_table_name);
            $id = $this->db->insert_id();
        }else
        {
            //update
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->set($data);
            $this->db->where($this->_primary_key, $id);
            $this->db->update($this->_table_name);
        }

        return $id;
    }

    //-----------------------------------------------------------------------------------------


    public function delete($id)
    {
        $filter = $this->_primary_filter;
        $id = $filter($id);

        //if we do not have id, we will not delete anything
        if(!$id)
        {
            return false;
        }
        $this->db->where($this->_primary_key, $id);
        $this->db->limit(1);
        $this->db->delete($this->_table_name);
    }

    //-----------------------------------------------------------------------------------------

}