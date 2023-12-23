<?php
    include "php/config.php";
?>
<!DOCTYPE html>

<html>

	<head>

		<title>
            
            Shopping Cart
        
        </title>

		<link rel ="stylesheet" type="text/css" href="Shopping Cart.css">

		<script src="https://kit.fontawesome.com/9088cc6401.js" crossorigin="anonymous"></script>

	</head>
	
	

    <body>

        <div class="container">

            <h1>
                
                Shopping Cart
            
            </h1>

            <div class="cart">

                <div class="products">
                    <?php
                        $items_id = isset($_GET['item_id'])?$_GET['item_id']:1;
                        $sql = "SELECT * FROM items WHERE item_id = '$items_id'";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                                $thumbnail = $row['thumbnail'];
                                $name = $row['name'];
                                $unit = $row['unit'];
                                $price = $row['price'];
                                ?>
                                    <div class="product">

                                        <img src="uploaded/images/<?php echo $thumbnail; ?>">

                                        <div class="product-info">

                                            <h3 class="product-name">
                                                
                                                <?php echo $name; ?>
                                            
                                            </h3>

                                            <h4 class="product-price">
                                                Rs. <span id="price" price="<?php echo $price; ?>">
                                                        <?php echo $price; ?>
                                                    </span>
                                            </h4>

                                            <h4 class="product-offer" id="product_offer">
                                                10 %
                                            
                                            </h4>

                                            <p class="product-quantity">
                                                
                                                Qnt: 
                                                
                                                <input value="1" name="quantity" id="quantity">
                                            
                                            </p>

                                            <p class="product-remove">

                                                <i class="fas fa-trash-alt"></i>

                                                <span class="remove">
                                                    
                                                    Remove
                                                
                                                </span>

                                            </p>

                                        </div>

                                    </div>

                                <?php
                            }
                        }
                    ?>
                </div>

                <div class="cart-total">

                    <p>

                        <span>
                            
                            Total Price
                        
                        </span>

                        <span>
                            
                            Rs. <span id="total_price">183</span>
                        
                        </span>

                    </p>
                    <p>

                        <span>
                            
                            No. of Items
                        
                        </span>

                        <span>
                            
                            1
                        
                        </span>

                    </p>

                    <p>

                        <span>
                            
                            You Save
                        
                        </span>

                        <span>
                            
                            Rs. <span id="discount_amount"></span>
                        
                        </span>

                    </p>

                    <a href="Details For Checkout.html">
                        
                        Proceed to Checkout
                    
                    </a>

                </div>

            </div>

        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(()=>{
                function generate_price(){
                    var discount_rate = 5;  
                    var price = Number($("#price").attr("price"));
                    var quantity = $("#quantity").val();
                    var total_price_display = $("#total_price");

                    var discount_amount = discount_rate/100*(price*quantity);

                    $("#discount_amount").html(Math.floor(discount_amount));
                    $("#product_offer").html(discount_rate+"%");
                    total_price_display.html(price*quantity);
                }
                generate_price();

                $("#quantity").on("input",function(){
                    generate_price();
                })
            });
        </script>

    </body>

</html>
