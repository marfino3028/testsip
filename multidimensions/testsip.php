<?php 

$product_arr = array ( 
	"makanan"=>array( 
		"id"=>1, 
		"nama"=>"Ikan", 
		"cost"=>20000 
	), 
	"minuman"=>array( 
		"id"=>2, 
		"nama"=>array( 
            "coklat"=>"silverqueen",
            "coklat"=>"toblerone"
        ),
		"cost"=>10000 
	)
); 
echo json_encode($product_arr); 
?> 
