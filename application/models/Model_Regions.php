<?php

    class Model_Regions extends CI_Model
    {
        function getRegions()
        {
            $sql = $this->db->query("select nomRegion , scoreRegion, idRegion  from region");
            return $sql->result();
        }
    }

?>