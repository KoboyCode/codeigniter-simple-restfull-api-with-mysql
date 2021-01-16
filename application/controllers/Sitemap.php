<?php

class Sitemap extends CI_Controller {

	function index () {
		$menu = array('home', 'download');
		$data['menu'] = $menu;
		$this->load->view('sitemap', $data);
	}
}

