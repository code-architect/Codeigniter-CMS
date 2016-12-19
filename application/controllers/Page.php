<?php

/**
 * Controller for Page
 */
class Page extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Page_m');
    }

    public function index()
    {
        $pages = $this->Page_m->get_by(['page_slug' => 'about']);
        echo "<pre>";
        print_r($pages);
    }

    public function save()
    {
        $data = [
            'page_title' => 'Contact Us',
            'page_slug' =>  'contact',
            'page_order' => '3',
            'page_body' => 'contact me please'
        ];
        $pages = $this->Page_m->save($data);
        echo "<pre>";
        print_r($pages);
    }

} 