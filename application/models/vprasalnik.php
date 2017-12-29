<?php class vprasalnik extends CI_Model {


        public function rezultat()
        {
            echo $this->input->post('rezultat');die();
        }
}