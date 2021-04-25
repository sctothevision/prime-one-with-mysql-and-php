<?php 

class Controller_Feedback extends Controller
{

	function __construct()
	{
		$this->model = new Model_Feedback();
		$this->view = new View();
	}
	
	function action_index()
	{
		$this->view->generate('feedback_view.php', 'template_view.php');
	}

	function action_send() {
		if (isset($_POST['user'])) {
		$feedback['user'] = $_POST['user'];
			if (isset($_POST['email'])) {
				$feedback['email'] = $_POST['email'];
			}
			if (isset($_POST['comment'])) {
				$feedback['comment'] = $_POST['comment'];
			}
			$data = $this->model->send_data($feedback);
		} else {
			$data = 'Empty data!';
		}
		$this->view->generate('feedback_result_view.php', 'api_template_view.php', $data);
	}
}

?>