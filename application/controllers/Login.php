<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
	{
		// panggil library "session"
		$this->load->library("session");
		// panggil helper "url"
		$this->load->helper('url');

        // buat session
        // $this->session->set_userdata("ka-19","ini session");

        // redirect("Dashboard");

        // tampilkan halaman login
        $this->load->view("login");

    }
}