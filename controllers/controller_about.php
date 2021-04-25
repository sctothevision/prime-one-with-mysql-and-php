<?php 

class Controller_About extends Controller
{

	function __construct()
	{
		$this->model = new Model_About();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('authors_view.php', 'template_view.php', $data);
	}

	function action_author() {
		$id_author = $_GET['id'];
		$data = $this->model->get_data();
		$this->view->generate('author_view.php', 'template_view.php', $data);
	}
}

?>