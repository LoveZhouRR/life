<?php
/*
 * Created on 2013-9-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 class Model_model Extends CI_Model{
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 	}

 	public function get_models($id=false){
 		if($id==false)
 		{
 			$query=$this->db->get('models');
 			return $query->result_array();
 		}
 		$query=$this->db->get_where('models',array('id'=>$id));
 		return $query->row_array();
 	}
 }
?>
