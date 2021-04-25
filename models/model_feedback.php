<?php 
class Model_Feedback extends Model
{
	public function send_data($data = null)
	{	
		//Если переменная-параметр $data не пустая, то добавляем данные
		if (!empty($data)) {
			$result = $this->executeQuery("INSERT INTO feedback (user, comment, email) VALUES ('".$data['user']."', '".$data['comment']."', '".$data['email']."');");
			if (!$result) {
				$result = mysqli_error($this->mysqli);
			}
		} else {
			//иначе присваиваем ошибку. Можно получить код ошибки. Но для упращения вернем просто Error!
			$result = 'Empty data!';
		} 
		return $result;
	}
}
?>