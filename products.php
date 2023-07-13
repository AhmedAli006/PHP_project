
<?php
include_once 'connection.php';



$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {




 


echo  '
	<div class="product-grid">
    <div class="card">
      <div class="card-pill">
        Sale
      </div>
      <img class="card-img" src="'. $row['product_picture'] .'" alt="product-image">
      <div class="flex-row space-between w-full mb-sm">
        <p class="product-brand"> '. $row['price'] .'</p>
        <p class="product-cat hide">Skateboarding</p>
      </div>
      <h1 class="product-name">'. $row['product_name'] .'</h1>
      <div class="flex-row">
        <p class="price strike">$<span> '. $row['price'] .'</span></p>
        <p class="price">$<span> '. $row['price'] .'</span></p>
      </div>
      <div class="btn-col">
        <a href="#" class="icon-link">
          Purchase
          <svg fill="none" class="rubicons arrow-right-up" xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M17.9645 12.9645l.071-7h-7.071" stroke-linecap="round"></path>
            <path d="M5.9645 17.9645l12-12" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </div>
    </div>';

}
?>