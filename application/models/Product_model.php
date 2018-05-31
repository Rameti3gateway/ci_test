<?php 
	class Product_model extends CI_Model
	{		
		public function __construct()		
		{
			parent::__construct();
		}
		public function show_name()
		{
			return 'Product model';
		}
	}
 ?>