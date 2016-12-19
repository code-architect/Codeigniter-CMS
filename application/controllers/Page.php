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
            'page_order' => '3',
        ];
        $pages = $this->Page_m->save($data, 3);
        echo "<pre>";
        print_r($pages);
    }

    public function delete()
    {
        $this->Page_m->delete(3);
    }
} 