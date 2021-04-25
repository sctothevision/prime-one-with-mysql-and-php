<?php 
class Model_News extends Model
{
	public function get_data()
	{	
		$result = $this->executeQuery("SELECT * FROM last_news");
		return $result;
	}
}
?>