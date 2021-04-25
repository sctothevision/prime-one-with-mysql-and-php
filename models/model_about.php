<?php 
class Model_About extends Model
{
	public function get_data($id = -1)
	{	
		if ($id <> -1) {
			$result = $this->executeQuery("SELECT * FROM authors WHERE id = ");
		} else {
			$result = $this->executeQuery("SELECT * FROM authors");
		}
		return $result;
	}
}
?>