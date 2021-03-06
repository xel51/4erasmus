<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package CodeIgniter
 * @author  ExpressionEngine Dev Team
 * @copyright  Copyright (c) 2006, EllisLab, Inc.
 * @license http://codeigniter.com/user_guide/license.html
 * @link http://codeigniter.com
 * @since   Version 1.0
 * @filesource
 */

// --------------------------------------------------------------------

class Place extends CI_Model {

	public $placeid;
	public $placename;
	public $placedesc;
	public $placeaddress;
	public $creatorid;
	public $creatorname;
	public $peoplewashere;
	public $eventswashere;
	public $adddate;
	public $lastupdate;
	public $imageurl;
	public $followers;
	public $latitude;
	public $longitude;
	public $ci;
   /**
	 * Constructor
	 *
	 *
	 * @access	public
	 * @param
	*/
	public function __construct() {
		// Set the super object to a local variable for use throughout the class
	   	parent::__construct();
	   	$this->ci =& get_instance();
	}

	public function create() {
		$place = $this->instance();
		$place->creatorid 	= $this->session->userdata('userid');
		$place->creatorname = $this->session->userdata('username');
		$place->adddate		= date('Y-m-d H:m:s'); 
		
		unset($place->ci);
		$place->placename = ucfirst($place->placename);
		$insert = get_object_vars($place);
		$this->ci->db->insert('places', $insert);
		$this->select(array('placename' => $place->placename));
	}

	public function update() {
		$place = $this->instance();
		$this->ci->db->where('placeid', $this->placeid);
		$this->ci->db->update('places', $place);
	}

	public function select($condition) {
		$query = $this->ci->db->get_where('places', $condition, 1);
		$place = $query->first_row();
		if( empty($place)) {
			return false;
		} 
		else {
			// Pass Variables
			$placeobj = get_object_vars($place);
			foreach ($placeobj as $key => $value) {
				$this->{$key} = $placeobj[$key];
			}
			return true;
		}
	}

	public function instance() {
		$instance = new StdClass();
		foreach($this as $key => $value) {
			$instance->{$key} = $value;
		}
		unset($instance->ci);
		return $instance;
	}
}