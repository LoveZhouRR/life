<?php
/*
 * Created on 2013-9-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class Model Extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_model');
	}

	function View()
	{
		$data['models']=$this->Model_model->get_models();

		$this->load->view('View',$data);
	}

	function Detail($id)
	{
		$data['model']=$this->Model_model->get_models($id);

		$this->load->view('Detail',$data);
	}
	
	function Do()
	{
	}
}
?>
