<?php	
	class Main extends CI_Controller
	{

		public function _construct()
		{		
			parent :: _construct();
		}

		public function index()
		{
			echo "Main example";
		}

		public function detail($id = 0,$id2 = 0)
		{
			echo $id."/".$id2;
		}
	}
?>
