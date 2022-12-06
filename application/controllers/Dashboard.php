<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		// panggil library "session"
		$this->load->library("session");
		// panggil helper "url"
		$this->load->helper(array('url', 'cookie'));

		if($this->session->userdata('ka-19') == "" && get_cookie("ck-ka") == "")
		{
			redirect("Login");
		}
		else
		{
			$this->load->view('dashboard');
		}		
	}

	function setSession()
	{
		// panggil library "session"
		$this->load->library("session");
		// panggil helper "url"
		$this->load->helper(array('url', 'cookie'));

		//Ambil data json
		$json = file_get_contents("php://input");
		$data = json_decode($json);
		// $username = $data->username;
		//$password = $data->password
		$checkbox = $data->checkbox;

		$username = $data->username;

		//Buat session
		$this->session->set_userdata('ka-19', $username);

		//Jika chechbox = 1
		if($checkbox == 1)
		{
			//Buat cookie
			set_cookie("ck-ka", $username, 7200);
		}

		//Kirim keterangan ke gotoDasboard(JS)
		echo json_encode(array("hasil" => 1));
	}

	function setLogout()
	{
		// panggil library "session"
		$this->load->library("session");
		// panggil helper "url"
		$this->load->helper(array('url', 'cookie'));

		//Hapus session
		$this->session->unset_userdata('ka-19');
		// //Menghapus semua user
		// $this->session->destroy();

		//Hapus cookie
		delete_cookie("ck-ka");

		//Alihkan ke halaman ("Controller") Login
		redirect("Login");
	}

}
