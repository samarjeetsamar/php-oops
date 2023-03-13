<?php 

class Product {
    private static $totalCount = 0;
    
    public static function incrementTotalCount() {
      	self::$totalCount++;
    }
    
    public static function getTotalCount() {
      	return self::$totalCount;
    }

	// Product properties and methods...
}

class Cart {
	private $products = array();
	
	public function addProduct(Product $product) {
		// Add the product to the cart
		$this->products[] = $product;
		
		// Update the total number of products
		Product::incrementTotalCount();
	}

	public function getCartProducts(){
		return $this->products;
	}
	
  // Cart properties and methods...
}



// Create some products
$product1 = new Product();
$product2 = new Product();
$product3 = new Product();
$product4 = new Product();

// Create some carts
$cart1 = new Cart();
$cart2 = new Cart();
$cart3 = new Cart();

// Add products to carts
$cart1->addProduct($product1);
$cart1->addProduct($product2);
$cart2->addProduct($product3);
$cart3->addProduct($product4);

print_r($cart1->getCartProducts());

// Get the total number of products
$totalProducts = Product::getTotalCount();
echo "Total number of products: $totalProducts"; // Output: Total number of products: 3