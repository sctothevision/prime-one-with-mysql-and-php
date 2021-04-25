<h1>Добро пожаловать на наш первый сайт!</h1>
<table>
	<tr><th>ID</th><th>Title</th><th>Content</th><th>Postcard</th></tr>
	<?php 
		for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
		    $data->data_seek($row_no);
		    $row = $data->fetch_assoc();
		    echo "<tr><td>".$row['id_news']."</td><td>".$row['title']."</td><td>".$row['content']."</td><td><img src='".$row['postcard']."' width='150'/></td></tr>";
		}
	?>
</table>