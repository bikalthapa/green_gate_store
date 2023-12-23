<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<style>
		#new_item_form, .view_data{
			max-width: 300px;
			margin: auto;
		}	
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<p class="text-center display-6">Admin Panel</p>
<a href="view_data.php" class="btn btn-primary d-flex justify-content-center align-items-center view_data">View Data</a>
<form id="new_item_form" method="post" action="">
  <div class="mb-3">
    <label for="name" class="form-label">Item Name</label>
    <input type="text" name="name" class="form-control border-primary" id="name">
  </div>
  <div class="mb-3">
    <label for="thumbnail" class="form-label">Thumbnail</label>
    <input type="file" name="thumbnail" accept="image/*" class="form-control border-primary" id="thumbnail">
  </div>
  <div class="mb-3">
    <label for="unit" class="form-label">Unit</label>
    <input type="text" name="unit" class="form-control border-primary" id="unit">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" class="form-control border-primary" id="price">
  </div>  
  <button type="submit" class="btn btn-primary w-100">Upload</button>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
	$(document).ready(()=>{
		var name = $("#name");
		var thumbnail = $("#thumbnail");
		var unit = $("#unit");
		var price = $("#price");
		$("#new_item_form").on("submit",function(e){
			e.preventDefault();
			if(name.val()==""){
				alert("Name is empty");
			}else if(thumbnail.val()==""){
				alert("Thumbnail is empty");
			}else if(unit.val()==""){
				alert("Unit is empty");
			}else if(price.val()==""){
				alert("Price is empty");
			}else{
				$.ajax({
					url:"../php/data_insert.php?mode=item_add",
					type:"POST",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(data){
						alert(data);
					}
				});
			}
		});
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>