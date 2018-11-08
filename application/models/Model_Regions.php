<?php

    class Model_Regions extends CI_Model
    {
        function getRegions($nomUser)
        {
            $sql = $this->db->query("select statutUser from user where nomUser =" + $nomUser);

            if($sql->result()[0]->statutUser == "admin" )
            {
                $sql = $this->db->query("select nomRegion , scoreRegion, idRegion  from region");
            }
            else{
                $sql = $this->db->query("select nomRegion , scoreRegion, idRegion  from region where nomRegion = 'Bourgogne'");
            }           
            return $sql->result();
        }
    }

?>