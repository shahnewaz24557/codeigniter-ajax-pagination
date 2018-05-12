<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_pagination extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view("home/index");
    }

    function pagination() {

        $config = $this->config->item('pagination');

        $config["base_url"] = "#";
        $config["total_rows"] = $this->db->count_all("countries");
        $config["per_page"] = 10;

        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config["per_page"];

        $data['countries'] = $this->ajax_pagination_model->fetch_details($config["per_page"], $start);
        $data['pagination_link'] = $this->pagination->create_links();
        $result = $this->load->view("home/data", $data);
    }
}
