<?php
	include "config.php";
	if(isset($_GET['mode'])){
		if($_GET['mode']=="item_add"){// Adding of items
			$name = $_POST['name'];
			$thumbtype = $_FILES['thumbnail']['type'];
			$unit = $_POST['unit'];
			$price = $_POST['price'];

			if($thumbtype=="image/jpeg" || $thumbtype=="image/png"){
				// Saving file to server
				$filename = "item".rand(1,1000)." ".date('y-m-h-d-s')." ".$_FILES['thumbnail']['name'];
				$target_dir = "../uploaded/images/";
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_dir.$filename);

				// Inserting data into database
				$sql = "INSERT INTO items (name, thumbnail, unit, price) VALUES ('$name','$filename','$unit','$price')";
				$result = mysqli_query($conn,$sql);
				if($result){
					echo "Data Added Success Fully";
				}else{
					echo "Data Insertion Failed";
				}
			}else{
				echo "Your image must be in jpeg or png format.";
			}
		}
	}
?>