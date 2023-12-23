<?php
	include "config.php";// Including connection file

	$str = "";

	function get_items_as_card($row){
		$id = $row['item_id'];
	    $name = $row["name"];
	    $unit = $row['unit'];
	    $price = $row['price'];
	    $thumbnail = $row['thumbnail'];

	    $card = '
	        <div class="product-box">
	            <img alt="apple" src="uploaded/images/'.$thumbnail.'">
	            <strong>'.$name.'</strong>
	            <span class="quantity">'.$unit.'</span>
	            <span class="price">Rs . '.$price.'</span>
	            <!--cart-btn------->
	            <a href="Shopping Cart.php?item_id='.$id.'" class="cart-btn">
	                <i class="fas fa-shopping-bag"></i> Add to Cart
	            </a>
	            <!--like-btn------->
	            <a class="like-btn">
	                <i class="far fa-heart"></i>
	            </a>
	    	</div>
	    ';
	        return $card;
	}

	if(isset($_POST['mode'])){// Mode is set
		if($_POST['mode']=="search"){// Data to be loaded for search mode//

			$key = isset($_POST['search'])?'%'.$_POST['search'].'%':"a";
			if($key!="a"){
				// Retrieving data from the database
				$sql = "SELECT * FROM items WHERE name LIKE '$key' ORDER BY item_id DESC";
				$result = mysqli_query($conn, $sql);
				if($result){
					if(mysqli_num_rows($result)<=0){
						?>
					        <div class="product-heading">
					            <h3>Nothing Found</h3>
					        </div>
						<?php
					}else{
						?>
					        <div class="product-heading">
					            <h3> Search Results</h3>
					        </div>
				           	<div class="product-container">
						<?php
							while($items = mysqli_fetch_assoc($result)){
								echo get_items_as_card($items);
							}
					}
					?>
						</div>
					<?php
				}
			}else{
				echo '';
			}
		}else if($_POST['mode']=="items_display"){
			$sql = "SELECT * FROM items ORDER BY item_id DESC LIMIT 9";
			$result = mysqli_query($conn,$sql);
			if($result){
				while($items = mysqli_fetch_assoc($result)){
					echo get_items_as_card($items);
				}
			}

		}
	}
?>