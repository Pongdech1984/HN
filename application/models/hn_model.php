<?php
class Hn_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }


        public function hn_type()
        {
                $this->db->select('*');
                $this->db->from('hntype');
                $query = $this->db->get();
                return $query->result();
        }

}

?>
