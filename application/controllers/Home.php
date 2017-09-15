<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
	}
	public function addopdcard()
	{
		$this->load->model('hn_model');
		$data['hn_type'] = $this->hn_model->hn_type();

		$this->load->view('header');
		$this->load->view('add-opdcard',$data);
	}
	public function addopdtodb()
	{

		$hnnum = $this->input->post("hnnum");
		$hnname = $this->input->post("hnname");
		$date = $this->input->post("dateInput");
		$hntype = $this->input->post("hntype");
		$yy = $this->input->post("yy");
		$dm = $this->input->post("dm");
		$years= $yy+543;

		$addopd = array(
				'hn_num' => $hnnum,
        'hn_name' => $hnname,
        'hn_date' => $date,
				'hn_type' => $hntype,
				'hn_path'=> 'ocimage/'.$dm.$years.$hnnum.$hntype
		);

		echo ('<pre>');
		print_r ($addopd);
		exit();
	}
}
