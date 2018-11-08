<?php

    class Model_Villes extends CI_Model
    {
        function getVilles($id)
        {
            $sql = $this->db->query("select nomVille , scoreVille  from ville where numRegion=".$id);
            return $sql->result();
        }
    }

?>