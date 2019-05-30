<style type="text/css">
		table {
			  width: 80%;
			   text-align: left;
  			border: 1px black;
  
  			margin-bottom: 80px;

		}


		tr:hover {background-color: #f5f5f5;}

		th, td {
			  border-bottom: 1px  #ddd;
			   font-family: "Times New Roman", Times, serif;
			   font-size: 16px;	
			    font-weight: bold;
			     padding: 8px;
			     text-align:left;

  			}


</style>

<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				<h1 >Course Details</h1>
			</div>
		<div class="module-body">

						
	<form method="post" id="profile" name="profile"class="form">
	
	<table  class=" table-bordered table-striped" align="center">
		<tbody>
				<?php foreach($cour as $user):
				?>
				
				<tr><br>		
					<th><b>Course:</b></th>
						<td><?php echo $user->course_id?></td>
				</tr>


				<tr><br>		
					<th><b>Course Name:</b></th>
						<td><?php echo $user->name_of_courses?></td>
				</tr>


				<tr><br>		
					<th><b>Course Duration:</b></th>
						<td><?php echo $user->no_of_years?></td>
				</tr>


				<tr><br>		
					<th><b>University:</b></th>
						<td><?php echo $user->university_id?></td>
				</tr>


			<?php endforeach;?>

		</tbody>
	</table>

</form>
</div>
</div>
</div>
</div>
