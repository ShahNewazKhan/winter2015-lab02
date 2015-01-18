<?php

/**
 * core/images.php
 * A model for gallery pictures
 *
 */
class Images extends CI_Model
{
	var $_tableName; // Model table name
	var $_keyField;	//Primary key

	//Constructor
	function __construct()
	{
		parrent::__construct();
		$this->_tableName = get_class($this);
	}

	//return all images, desending order by post date
	function all()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('images');

		return $query->result_array();
	}
}