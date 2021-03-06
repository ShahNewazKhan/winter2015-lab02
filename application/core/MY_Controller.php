<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;		            // identifier for our content
    
    // our menu navbar
    protected $choices = 
        array( 'Home' => '/' , 'Gallery' => '/gallery' , 'About' => '/about');

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct()
    {
	   parent::__construct();
	   $this->data = array();
	   $this->data['pagetitle'] = 'Sample Image Gallery Lab2';
    }

    /**
     * Render this page
     */
    function render()
    {
	   $this->data['menubar'] = build_menu_bar($this->choices);
	   $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
	   $this->data['data'] = &$this->data;

       //This renders the HTML as per /views/template.php
	   $this->parser->parse('template', $this->data);
    }

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */