<?php
/* Model for login and sign up   */

class Schoolweb_model extends CI_Model 
{
	//variable initialize
    var $title   = '';
    var $content = '';
    var $date    = '';
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
		//Load database connection
		$this->load->database();
    }
	
    function insert($table=false,$data=false)
	{
		$this->db->insert($table,$data);
		
		$last_id=$this->db->insert_id();
		return $last_id;
	}