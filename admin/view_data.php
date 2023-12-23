<?php
include "../php/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<style>
		#new_item_form, .add_data{
			max-width: 300px;
			margin: auto;
		}	
		th, td{
			border: 1px solid black;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<p class="text-center display-6">Admin Panel</p>
<a href="index.php" class="btn btn-primary d-flex justify-content-center align-items-center add_data">Add Data</a>
<table border="1" cellspacing="0" cellpadding="3" style="margin:auto;">
	<tr>
		<th>Id</th>
		<th>Item Name</th>
		<th>Unit</th>
		<th>Price</th>
		<th>Action</th>
	</tr>
	<?php
	$sql = "SELECT * FROM items ORDER BY item_id DESC";
	$result = mysqli_query($conn, $sql);
	if($result){
		while($row = mysqli_fetch_assoc($result)){
			$id = $row['item_id'];
			$name = $row['name'];
			$unit = $row['unit'];
			$price = $row['price'];
			?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $unit?></td>
					<td>Rs. <?php echo $price; ?></td>
					<td>
						<a href="#" class="text-primary">Update</a>
						<a href="delete.php?item_id=<?php echo $id; ?>" class="text-danger">Delete</a>
					</td>
				</tr>
			<?php
		}
	}
	?>
</table>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
	$(document).ready(()=>{

	});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>