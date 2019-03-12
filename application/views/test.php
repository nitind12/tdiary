<!DOCTYPE html>
<html>
<head>
	<title>CodeIgniter view example</title>
</head>
<body>
	CodeIgniter View Example<br><br>
	<form method="post" action="<?php echo site_url('Test_/savingdata');?>">
			User_id:<input type="text" name="User_id"/><br><br>
			Name:<input type="text" name="name"/><br><br>
			Mobile:<input type="text" name="mobile"/><br><br> 
			<input type="submit" value="submit" name="save"/>
	</form>
	<table border="1" cellpadding="5" cellspacing="5" width="40%">
		<tr style="text-align: left">
			<th>User id</th>
			<th>Name</th>
			<th>Mobile</th>
		</tr>
	<?php foreach ($users as $item) { ?>
		<tr>
			<td><?php echo $item->User_id;?></td>
			<td><?php echo $item->name;?></td>
			<td><?php echo $item->mobile;?></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>