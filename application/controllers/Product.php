<?php 
  class Product extends CI_Controller
	{		
		 public function __construct()
		{
			parent::__construct();
			$this->load->model('product_model');
		}

		public function index()
		{
			$data = array(
				'name' => 'Top' ,
				'fname' => 'Toptap'
			);
			
		$name = $this->product_model->show_name();
	    echo $name;
	    }	
	}
 ?>