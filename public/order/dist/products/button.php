<form method="post">
    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
    <input type="hidden" name="product_name" value="<?php echo $row['Item']; ?>">
    <input type="hidden" name="product_price" value="<?php echo $row['Price']; ?>">
    <input type="hidden" name="product_image" value="Shoes1.jpg">
    <button type="submit" name="add_to_cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
</form>
