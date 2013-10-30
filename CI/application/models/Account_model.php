<?php
/*
 * Created on 2013-9-30
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class Account_model extends CI_Model{
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 	}

	public function Get_account($account_name)
	{
		$query = $this->db->get_where('Account',array('name'=>$account_name));
		return $query->row_array();
	}

	public function Add_account()
	{

	}

 }
?>
