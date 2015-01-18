<?php
/**
 *
 * @package	COMP 4711 Lab 2
 * @author	Shah Newaz Khan
 * @license	http://opensource.org/licenses/MIT	MIT License
 */

defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 *Controller for applicaion/views/gallery.php
 *
 */
class Gallery extends Application 
{
	public function index()
	{
		//get all images from our model
		$pix = $this->images->all();

		//build an array of formatted cells for them
		foreach ($pix as $picture)
			$cells[] = $this->parser->parse('_cell', (array) $picture, true);

		//prime the table class
		$this->load->library('table');
		$parms = array(
			'table_open' => '<table class="gallery">',
			'cell_start' => '<td class="oneimage">',
			'cell_alt_start' => '<td class="oneimage">'
		);

		$this->table->set_template($parms);

		//Generate the table
		$rows = $this->table->make_columns($cells, 3);
		$this->data['thetable'] = $this->table->generate($rows);

		$this->data['pagebody'] = 'gallery';
		$this->render();
	}
}