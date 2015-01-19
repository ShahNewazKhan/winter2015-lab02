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

class About extends Application {

	public function index()
	{
		$this->data['pagebody'] = 'about';
		$this->render();
	}
}