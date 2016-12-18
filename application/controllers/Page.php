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

} 