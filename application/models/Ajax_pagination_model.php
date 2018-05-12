<?php
class Ajax_pagination_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function fetch_details($limit, $start) {

        $this->db->from("countries");
        $this->db->order_by("id", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }
}
