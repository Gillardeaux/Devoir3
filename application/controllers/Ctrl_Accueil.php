<?php

    class Ctrl_Accueil extends CI_Controller 
    
    {

    public function index()
	{
		$this->load->view('acceuil');
    }

    public function getAfficherLesRegions()
    {
        $this->load->model('Model_Regions');
        $tab['lesRegions'] = $this->Model_Regions->getRegions($_GET["nomUser"]);
        $this->load->view('view_Regions',$tab);
    }

    public function getAfficherLesVilles()
    {
        $this->load->model('Model_Villes');
        $tab['lesVilles'] = $this->Model_Villes->getVilles($_GET["id"]);
        $tab['id'] = $_GET["id"];
        $this->load->view('view_Villes',$tab);
    }

    public function setScoreVille()
    {
        $id = $_GET['id'];
        $this->load->model('Model_Villes');        
    }

}