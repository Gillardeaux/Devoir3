<?php

    class Model_Categorie extends CI_Model
    {
        function getVoter()
        {
            $sql = $this->db->query("select IDCONFERENCE, TITRE from conference");
            return $sql->result();
        }
    }

?>