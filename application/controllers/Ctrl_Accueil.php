<?php

    class Ctrl_Accueil extends CI_Controller 
    
    {

    public function index()
	{
		$this->load->view('acceuil');
    }

}